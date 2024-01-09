/** @type {import('tailwindcss').Config} */

export const content = ["./**/*.{html,js,php}"];
export const theme = {
  extend: {
    fontFamily: {
      montserrat: ["Montserrat", "sans-serif"],
      poppins: ["Poppins", "sans-serif"],
      kanit: ["Kanit", "sans-serif"],
    },
    backgroundImage: {
      "home-bg": "url('/img/home_bg.png')",
      "bg-left-nav": "url('/img/home_bg.png')",
    },
  },
};
export const plugins = [];
