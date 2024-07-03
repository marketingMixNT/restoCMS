/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "1921px",
            },
            colors: {
                primary: {
                    400: "#014a0a",
                },
                secondary: {
                    400: "#cc3b3e",
                },
                third: {
                    300: "#f8f2e8",
                    400: "#e5e4dd",
                },
            },
        },
    },
    plugins: [    require('@tailwindcss/typography'),
],
};
