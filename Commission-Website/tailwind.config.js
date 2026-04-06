/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        slideInFromLeft: {
          '0%': { transform: 'translateX(-100%)', opacity: '0' },
          '100%': { transform: 'translateX(0)', opacity: '1' },
        },
        slideInFromRight: {
            '0%' : { transform: 'translateX(100%)', opacity: '0' },
            '100%': { transform: 'translateX(0)', opacity: '1'},
        }
      },
      animation: {
        'slide-in-left': 'slideInFromLeft 1s ease-out forwards',
        'slide-in-right': 'slideInFromRight 0.8s ease-out forwards',
      },
    },
  },
  plugins: [],
}