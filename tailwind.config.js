/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./templates/**/*.php",
    "./inc/**/*.php",
    "./src/**/*.{js,ts,jsx,tsx,css}",
    "./assets/**/*.{js,ts,jsx,tsx}"
  ],
  theme: {
    extend: {
      screens: {
        'xs': '480px',
      },
      colors: {
        primary: {
          50: '#eff6ff',
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
        },
        medical: {
          mint: '#95DBC3',
          'mint-dark': '#7bc4a4',
        }
      }
    },
  },
  safelist: [
    'bg-black',
    'text-white',
    'bg-white',
    'text-black'
  ],
  plugins: [],
}
