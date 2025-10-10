/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,php}", // Scans all HTML and PHP files in the root directory
    "./**/*.{html,php}" // Scans all HTML and PHP files in subdirectories
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}