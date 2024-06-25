/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        md: '3rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      }
    },
    extend: {
      fontFamily: {
        base: "Open Sans"
      },
      fontSize: {
        'base': '16px',
        'heading-1': '1.75rem',
        'heading-2': '1.5rem',
        'heading-3': '1.25rem',
        'heading-4': '1rem',
        'heading-5': '.875rem',
        'heading-6': '.75rem',
        'sm-1': '0.5rem',
        'sm-2': '0.25rem',
        'sm-3': '0.125rem',
        'sm-4': '0.1rem',
      },
    }
  },
  plugins: [],
}

