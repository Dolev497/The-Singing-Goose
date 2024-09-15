/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors:{
                "myblue": "#84EDD3",
                "mygreen": "#7DD76F",
                "myyellow": "#FFD76A",
                "myborder": "#EEF86B",
                "mygold": "#CD9600",
                "backred": "#A53333",
                "frontred": "#FF4141",
                "backgreen": "#33482C",
                "frontgreen": "#598D55",
            },
            fontFamily: {
                roboto: ["Roboto Condensed", "sans-serif"],
                rowdies: ["Rowdies", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"],
            },
        },
    },
    plugins: [],
}
