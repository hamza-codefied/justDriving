/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,php}", // Scans all HTML and PHP files in the root directory
    "./**/*.{html,php}" // Scans all HTML and PHP files in subdirectories
  ],
  theme: {
    extend: {
      fontFamily: {
        'product-sans': ['"Product Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        'manrope': ['"Manrope"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        'sans': ['"Product Sans"', '"Manrope"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}