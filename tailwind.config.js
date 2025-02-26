import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import colors from 'tailwindcss/colors';
const plugin = require('tailwindcss/plugin');


/** @type {import('tailwindcss').Config} */
export default {
    darkMode: null,
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
                },
                float: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-10px)' },
        },
            },
            animation: {
                roll: 'roll 5s infinite',
                float: 'float 3s ease-in-out infinite',
            },
            colors: {
                // Re-assign Flux's gray of choice...
                zinc: colors.stone,

                // Accent variables are defined in resources/css/app.css...
                accent: {
                    DEFAULT: 'var(--color-accent)',
                    content: 'var(--color-accent-content)',
                    foreground: 'var(--color-accent-foreground)',
                },
            },
        },
    },

    plugins: [forms, typography,plugin(({ matchUtilities, theme }) => {
      matchUtilities(
        {
          "animation-delay": (value) => {
            return {
              "animation-delay": value,
            };
          },
        },
        {
          values: theme("transitionDelay"),
        }
      );
    }),],
};
