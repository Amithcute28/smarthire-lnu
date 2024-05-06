import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
          colors: {
            'blue': '#070372',
            'gold': '#eab117',
            'darkWhite': '#f5f5f5'
            
          },
        fontFamily: {
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },
        },
      },

    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
    
};
