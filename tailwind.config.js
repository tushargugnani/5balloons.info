/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            keyframes: {
                progress: {
                    "0%": { left: "-100%" },
                    "50%": { left: "100%" },
                    "100%": { left: "-100%" },
                },
            },
            animation: {
                progress: "progress 3s linear infinite",
            },
        },
    },
};
