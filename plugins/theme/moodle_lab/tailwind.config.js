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
    extend: {},
  },
  plugins: [],
}