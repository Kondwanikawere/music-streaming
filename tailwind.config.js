import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                PetitFormalScript : 'Petit Formal Script',
                Nats : 'nats'
            },
            colors: {
                'background': '#001120',
                'textRed' : '#B90020',
                transparentColor :'rgb (161,161,161,50%)'
              },
              rotate: {
                '18': '18.09deg',
              }
        },
    },
    plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
    ],
};
