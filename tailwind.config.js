/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  daisyui: {
    themes: ["winter", "dark","light"],
  },
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}
