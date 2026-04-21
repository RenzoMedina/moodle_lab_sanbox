/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.mustache",
    "./amd/src/**/*.js",
  ],
  important: true,
  corePlugins: {
    preflight: false,
  },
  theme: {
    extend: {
      fontFamily: {
        sans : ['Saira'],
      },
      fontWeight: {
        thin: '100',
        extralight: '200',
        light: '300',
        normal: '400',
        medium: '500',
        semibold: '600',
        bold: '700',
        extrabold: '800',
        black: '900',
      },
    },
  },
  plugins: [],
}