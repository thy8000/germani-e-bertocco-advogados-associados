/** @type {import('tailwindcss').Config} */

const colors = require("tailwindcss/colors");

module.exports = {
  content: [
    "./assets/**/*.{js,jsx,ts,tsx}",
    "./pages/*.php",
    "./pages/**/*.php",
    "./includes/components/*.php",
    "./includes/components/**/*.php",
  ],
  container: {
    center: true,
  },
  theme: {
    colors: {
      transparent: colors.transparent,
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      slate: colors.slate,
      red: colors.red,
      orange: colors.orange,
      amber: colors.amber,
      cyan: colors.cyan,
      emerald: colors.emerald,
      gallery: "#EFEEEE",
      darker: "#040404",
      baltic: "#27242A",
      emperor: "#525152",
      downriver: "#0B0B50"
    },
  },
  plugins: [],
};
