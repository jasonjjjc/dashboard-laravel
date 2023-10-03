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
        grey: 'rgb(33, 33, 36)',
      },
    },
  },
  plugins: [],
}