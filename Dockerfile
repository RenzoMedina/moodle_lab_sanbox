FROM php:8.3-apache

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libxml2-dev \
    libicu-dev \
    libldap2-dev \
    libonig-dev \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Configurar extensiones de PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    gd \
    mysqli \
    pdo \
    pdo_mysql \
    zip \
    intl \
    soap \
    opcache \
    exif \
    mbstring

# Configurar LDAP
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ \
    && docker-php-ext-install ldap

# Configuración de PHP para Moodle
RUN { \
    echo 'max_execution_time = 300'; \
    echo 'max_input_vars = 5000'; \
    echo 'post_max_size = 512M'; \
    echo 'upload_max_filesize = 512M'; \
    echo 'memory_limit = 512M'; \
    echo 'opcache.enable = 1'; \
    echo 'opcache.memory_consumption = 128'; \
    echo 'opcache.max_accelerated_files = 10000'; \
    echo 'opcache.revalidate_freq = 60'; \
    } > /usr/local/etc/php/conf.d/moodle.ini

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Crear directorio de datos
RUN mkdir -p /var/www/moodledata && \
    chmod -R 777 /var/www/moodledata

# Script de inicialización mejorado
COPY --chmod=755 <<'EOF' /usr/local/bin/start.sh
#!/bin/bash
set -e

# Siempre clonar Moodle si no existe (sin volumen persistente en /var/www/html)
if [ ! -f "/var/www/html/version.php" ]; then
    echo "📦 Instalando Moodle 4.5..."
    git clone -b MOODLE_405_STABLE --depth 1 https://github.com/moodle/moodle.git /tmp/moodle
    cp -r /tmp/moodle/. /var/www/html/
    rm -rf /tmp/moodle
    echo "✅ Moodle instalado"
else
    echo "✅ Moodle ya existe"
fi

# Asegurar permisos correctos
chown -R www-data:www-data /var/www/html /var/www/moodledata
chmod -R 755 /var/www/html
chmod -R 777 /var/www/moodledata

chmod -R 777 /var/www/html/blocks \
    /var/www/html/mod \
    /var/www/html/local \
    /var/www/html/theme \
    /var/www/html/auth \
    /var/www/html/enrol \
    /var/www/html/filter \
    /var/www/html/report

exec apache2-foreground
EOF

WORKDIR /var/www/html

EXPOSE 80

CMD ["/usr/local/bin/start.sh"]