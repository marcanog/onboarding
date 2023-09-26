/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js'
    ],
    fontFamily: {
        body_font: ['Inclusive Sans', 'Poppins', 'Open Sans'],
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
        backgroundImage:{
            'background_pattern': "url('/img/fondo1.jpg')",
        },
        backgroundSize:{
            'auto': 'auto',
            'cover': 'cover',
            'contain': 'contain',
            '50%' : '50%',
            'full' : '100%',
        },
        plugins: [
            require('@tailwindcss/typography'),
            require('@tailwindcss/forms'),
            require('@tailwindcss/aspect-ratio'),
            require('@tailwindcss/container-queries'),
        ]
    }
};
