/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/views/**/**/*.blade.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
          serif: ['Pelak', 'Vazirmatn'],
          sans: ['Pelak', 'Vazirmatn'],
      },
  },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}

