/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ["Montserrat", "sans-serif"],
        poppins: ["Poppins", "sans-serif"],
        kanit: ["Kanit", "sans-serif"],
      },
      backgroundImage: {
        "home-bg": "url('/img/home_bg.png')",
        "sidebar-bg": "url('/img/project-8.jpg')",
      },
    },
  },
  plugins: [],
};
