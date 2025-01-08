import forms from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["DM Sans", ...defaultTheme.fontFamily.sans],
                sans2: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: "var(--primary)",
                },
                secondary: "var(--secondary)",
                white: "var(--white)",
                light: "var(--light)",
                green: "var(--green)",
                yellow: "var(--yellow)",
                cyan: "var(--cyan)",
                "grey-1": "var(--grey1)",
                "grey-2": "var(--grey2)",
                "aqua-1": "var(--aqua-1)",
                "aqua-2": "var(--aqua-2)",
                "light-purple": "var(--light-purple)",
                "blue-light-1": "var(--blue-light-1)",
                "blue-light-2": "var(--blue-light-2)",
                "blue-light-3": "var(--blue-light-3)",
                "blue-light-4": "var(--blue-light-4)",
            },
        },
        container: {
            screens: {
                "2xl": "1240px",
            },
        },
    },

    plugins: [forms],
};
