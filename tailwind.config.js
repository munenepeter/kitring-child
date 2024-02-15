/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./inc/*.php",
    "./templates/*.php",
    "./template-parts/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'cgreen': {
          '50': '#eafff7',
          '100': '#cdfee9',
          '200': '#a0fad8',
          '300': '#63f2c5',
          '400': '#25e2ac',
          '500': '#00cc99',
          '600': '#00a47b',
          '700': '#008367',
          '800': '#006752',
          '900': '#005545',
          '950': '#003028',
        },
        'carrot': {
          '50': '#fff8ed',
          '100': '#ffefd4',
          '200': '#ffdba8',
          '300': '#ffc171',
          '400': '#ff9933',
          '500': '#fe7e11',
          '600': '#ef6307',
          '700': '#c64808',
          '800': '#9d3a0f',
          '900': '#7e3110',
          '950': '#441606',
        },


      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}

