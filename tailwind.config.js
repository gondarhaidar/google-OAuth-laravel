/** @type {import('tailwindcss').Config} */
export default {
    mode: "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                oswald: ["Oswald", "serif"],
            },
        },
    },
    plugins: [],
};
