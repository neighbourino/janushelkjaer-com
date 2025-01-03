import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            xs: '320px',
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
        },
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                serif: ['Spectral', ...defaultTheme.fontFamily.serif],
                display: ['Bebas Neue', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                roll: {
                    '0%': { transform: 'rotateX(45deg) rotateY(-45deg)' },
                    '25%': { transform: 'rotateX(-45deg) rotateY(-45deg)' },
                    '50%': { transform: 'rotateX(45deg) rotateY(45deg)' },
                    '75%': { transform: 'rotateX(-45deg) rotateY(45deg)' },
                    '100%': { transform: 'rotateX(45deg) rotateY(-45deg)' }
                }
            },
            animation: {
                roll: 'roll 5s infinite',
            }
        },
    },

    plugins: [forms, typography],
};
