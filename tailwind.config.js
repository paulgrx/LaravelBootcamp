/*
/!** @type {import('tailwindcss').Config} *!/
module.exports = {
  content: [
      content: [
  /!*  "./resources/views/chirps/index.blade.php",
    "./resources/!**!/!*.js",
    "./resources/!**!/!*.vue",*!/
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
*/

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
