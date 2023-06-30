module.exports = {
    purge: [
        // Paths to your templates...
        "./**.php",
        "./**/**.php",
        "./site-structure/**/**.js"
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}