var elixir = require('laravel-elixir');



elixir(function(mix) {
    mix.sass('app.scss')
        .scripts([
            'libs/sweetalert-dev.js'
        ], './public/js/libs.js')
        .styles([
            'libs/sweetalert.css'
        ], './public/css/libs.css');
});
