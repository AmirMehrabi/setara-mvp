/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/views/**/**/*.blade.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'sunglow': {
        '50': '#fefae8',
        '100': '#fef3c3',
        '200': '#ffe689',
        '300': '#fec92d',
        '400': '#fbb714',
        '500': '#eb9f07',
        '600': '#cb7703',
        '700': '#a25306',
        '800': '#86420d',
        '900': '#723611',
        '950': '#421a06',
    },
    },
    extend: {
      fontFamily: {
          serif: ['Pelak', 'Vazirmatn'],
          sans: ['Pelak', 'Vazirmatn'],
      },
  },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('daisyui'),
    require('flowbite/plugin')
  ],
}

