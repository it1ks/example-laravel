import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            animation: {
                typewriter: "typewriter 2s steps(11, end) forwards",
                caret: "typewriter 2s steps(11, end) forwards, blink 1s steps(11) infinite 2s",
            },
            keyframes: {
                typewriter: {
                    to: {
                        left: "100%",
                    },
                },
                blink: {
                    "0%": { opacity: 0 },
                    "1%": { opacity: 1 },
                    "49%": { opacity: 1 },
                    "50%": { opacity: 0 },
                    "100%": { opacity: 0 },
                },
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
