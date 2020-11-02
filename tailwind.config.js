module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
    theme: {
        extend: {
            colors: {
                theme: {
                },
            },
            fontFamily: {
                'roboto': ['Roboto']
            },
            container: {
                center: true
            },
            maxWidth: {
                '1/4': '25%',
                '1/2': '50%',
                '3/4': '75%'
            },
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                'xxl': '1600px'
            }
        }
    },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
