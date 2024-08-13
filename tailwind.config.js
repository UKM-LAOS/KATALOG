/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            spacing: {
                "8%": "8%",
                "9%": "9%",
                0: "0vh", //Zero
                0.5: "0.5vw", // spacbut
                1: "1vh", //One
                1.5: "1.5vh",
                1.9: "1.9vw", //View
                2: "2vw",
                2: "2vh", //Search
                3: "3vw",
                3.6: "3.6vw", //Spacenav
                "5vh": "5vh", //Head1
                8: "8vw", //wbutnav spacebox
                12: "12vh", //headermain
                13.8: "13.8vh", //bloxspax
                14.5: "14.5vh", //Head2
                17: "17vw", // logos
                17.2: "17.2vw", //Search
                21: "21vh",
                22: "22vw", // butmain
                30: "30vh",
            },
            padding: {
                0.2: "0.2vh",
                "1.6vw": "1.6vw",
                1: "1vh", //yi
                1: "1vw", //spanput
                4.1: "4.1vw", //input
                "5.5": "5.5vw",
                5: "5vh", //boxh
            },
            fontSize: {
                1.1: "1.1vw", //place nav
                1.2: "1.2vw",
                1.4: "1.4vw",
                3.2: "3.2vw", //bigsize
                1.6: "1.6vw", //normal nav
                1.7: "1.7vw",
                1: "1vw", //input
                1.7: "1.7vw", //butnav
                1.9: "1.9vw", //overbig
            },
            width: {
                1.7: "1.7vw", //searchimg
                5: "5vw", //width
                5.2: "52vw", //wx
                7: "7vw",
                "8%": "8%",
                "15%": "15%",
                "18vw": "18vw",
            },
            height: {
                0.4: "0.4vh",
                7: "7vh",
                8: "8vh", //input
                11.5: "11.5vh", //11.5vh
                19: "19vh",
                20: "20vh", //nav
                42: "42vh", //hx
            },
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
                all: ["Verdana", "sans-serif"],
            },
            borderRadius: {
                1: "1vw", ///input
                "15px": "15px",
            },
            colors: {
                primary: "#FFFFFF",
                secondary: "#2C4156",
                seconhvr: "#444",
                yellowbut: "#FAA832",
                hvryellow: "#FFC47F",
                shadow: "#D2D7DB",
                bluebut: "#7F99B2",
                hvrblue: "#B5C8DA",
                iconstyle: "#39586D",
                greys: "#99A0AA",
            },
        },
    },
    plugins: [],
};
