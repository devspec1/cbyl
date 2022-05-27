const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        
        extend: {
            fontFamily: {
                sans: ['Raleway', ...defaultTheme.fontFamily.sans],
                'heading': ['Montserrat'],
            },
            textColor: {
                'purple': '#ae00a9',
            },
        },
        screens: {
            'sm': '640px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1200px',
            // => @media (min-width: 1280px) { ... }

            '2xl': '1200px',
            // sm: "100%",
            // md: "100%",
            // lg: "1024px",
            // xl: "1200px"
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '2rem',
                sm: 0,
                lg: 0,
                xl: 0,
                '2xl': 0,
            },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'primary': '#AE00A9',
            'secondary': '#2F5B8B',
            'st': '#29C404',
            'et-s': '#476C9B',
		'rd': '#EC1818',
        },
    },

    plugins: [require('@tailwindcss/forms'), require('flowbite/plugin')],
};
