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
      green: colors.green,
      teal: colors.teal,
      violet: colors.violet,
      pink: colors.pink,
      amber: colors.amber,
      stone: colors.stone,
      slate: colors.slate,
      rose: colors.rose,
      yellow: colors.yellow,
      orange: colors.orange,
      sky: colors.sky,
      jade: "#04B571",
      jadeSecondary: "#00BA73",
      jaffa: "#F38D3B",
      midgray: "#5C5C63",
      apple: "#6C9C44",
      grayLight: "#F1F1F1",
    },
  },
  plugins: [],
};
