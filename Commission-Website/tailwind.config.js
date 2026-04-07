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
        'home-bg': '#f3f7fc',
        'home-ink': '#0f172a',
        'home-ink-soft': '#475569',
        'home-accent': '#1d4ed8',
        'home-accent-soft': '#3b82f6',
        'portfolio-ink': '#111827',
        'portfolio-ink-soft': '#4b5563',
        'portfolio-surface': '#ffffff',
        'portfolio-accent': '#0f766e',
        'portfolio-accent-soft': '#14b8a6',
      },
      fontFamily: {
        sans: ['Manrope', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        serif: ['Playfair Display', 'serif'],
      },
      keyframes: {
        slideInFromLeft: {
          '0%': { transform: 'translateX(-100%)', opacity: '0' },
          '100%': { transform: 'translateX(0)', opacity: '1' },
        },
        slideInFromRight: {
            '0%' : { transform: 'translateX(100%)', opacity: '0' },
            '100%': { transform: 'translateX(0)', opacity: '1'},
        },
        slideShow: {
          '0%, 28%': { transform: 'translateX(0)' },
          '33%, 61%': { transform: 'translateX(-33.3333%)' },
          '66%, 94%': { transform: 'translateX(-66.6666%)' },
          '100%': { transform: 'translateX(0)' },
        },
        riseIn: {
          from: {
            opacity: '0',
            transform: 'translateY(18px) scale(0.985)',
          },
          to: {
            opacity: '1',
            transform: 'translateY(0) scale(1)',
          },
        },
        slideFade: {
          from: {
            opacity: '0',
            transform: 'translateX(24px)',
          },
          to: {
            opacity: '1',
            transform: 'translateX(0)',
          },
        },
        softZoom: {
          from: {
            transform: 'scale(1.02)',
          },
          to: {
            transform: 'scale(1.08)',
          },
        },
      },
      animation: {
        'slide-in-left': 'slideInFromLeft 1s ease-out forwards',
        'slide-in-right': 'slideInFromRight 0.8s ease-out forwards',
        'slide-show': 'slideShow 15s ease-in-out infinite',
        'rise-in': 'riseIn 850ms cubic-bezier(0.22, 1, 0.36, 1) both',
        'slide-fade': 'slideFade 950ms cubic-bezier(0.22, 1, 0.36, 1) 120ms both',
        'soft-zoom': 'softZoom 12s ease-in-out infinite alternate',
      },
    },
  },
  plugins: [],
}