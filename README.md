# 📚 Moodle Lab Sandbox
This repository contains a Docker Compose configuration for setting up a Moodle development environment. It includes services for Moodle, MySQL, and phpMyAdmin, allowing developers to easily test and develop Moodle plugins and themes.

## 🚀 Objectives
- 🧩 Experiment with modular plugins and new features.
- 🔧 Validate integrations with CI/CD, Terraform, and cloud deployments.
- 📚 Document best practices for installation, configuration, and maintenance.
- 🎯 Test staging environments before production release.

## 📂 Repository Structure
- `plugins/` → Plugin development and testing.
- `docs/` → Technical documentation and quick guides.
- `.github/workflows/` → Pipeline and workflow configuration.
- `/` → Scripts and test environment configurations.

## 🛠️ Requirements
- Docker and Docker Compose installed on the host machine.
- Basic knowledge of Moodle, Docker, and MySQL.
- Node.js 24+
- Moodle 4.x
- Terraform and Azure CLI (optional for cloud deployment testing).

## 📖 Usage
1. Clone the repository:
   ```bash
   git clone https://github.com/RenzoMedina/moodle_lab_sanbox
   cd moodle_lab_sandbox
    ```
2. Start the Docker Compose environment:
    ```bash
    docker-compose up -d
    ```
3. Access Moodle at `http://localhost:8080`.
4. Run tests and develop plugins in the `plugins/` directory.

## 🧪 Testing
- Use PHPUnit for unit testing Moodle plugins.
- Use Behat for behavior-driven testing of Moodle features.
- Integrate tests into CI/CD pipelines for automated testing.
## 📈 Future Enhancements
- Add support for additional Moodle versions.
- Improve Docker Compose configuration for better performance.
- Integrate with cloud services for scalable testing environments.

## 👤 Author
- [Renzomedina](https://github.com/renzomedina)
- Moodle Developer | Backend Developer | DevOps Jr
