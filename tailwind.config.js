/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.html",
  ],
  theme: {
    extend: {
      colors: {
        black: 'rgb(30, 30, 30)',
        grey: 'rgb(42, 38, 42)',
      },
    },
  },
  plugins: [],
}