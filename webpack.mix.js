let mix = require("laravel-mix")

mix.setPublicPath("public")

mix.react("assets/js/app.jsx", "public/js/app.js")
mix.sass("assets/css/app.scss", "public/css/app.css")
