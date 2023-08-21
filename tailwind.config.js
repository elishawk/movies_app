/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./layouts/**/*.vue",
    "./layouts/**/*.blade.php",
    "./layouts/**/*.js",
  ],
  
  theme: {
    extend: {
      width:{
        '96': '24rem'
      }
    },
  },
  plugins: [],
}

