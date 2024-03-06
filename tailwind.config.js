/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        sge: '#325B87',
        white: '#FFFFFF',
        aqua: '#63D9CD',
        black: '#000000',
      },
    },
  },
  plugins: [],
}
