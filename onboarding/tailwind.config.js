/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './node_modules/flowbite/**/*.js'
    ],
    fontFamily: {
        body_font: ['DM Sans', 'Poppins', 'Open Sans'],
    },
    extend: {
        spacing: {
            '1': '8px',
            '2': '12px',
            '3': '16px',
            '4': '24px',
            '5': '32px',
            '6': '48px',
        },
        borderRadius: {
            '4xl': '2rem',
        },
        screens:{
            'sm': '360px',
            'md': '744px',
            'lg': '1366px',
        },
        plugins: [
            require('flowbite/plugin')
        ],
    }
};
