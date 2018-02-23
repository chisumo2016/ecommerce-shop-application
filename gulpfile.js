

var elixir = require('laravel-elixir');

//create elixir
elixir.config.sourcemaps = false;

//Require gulp
var gulp = require('gulp');

elixir(function (mix) {
    //compile sass to css
    mix.sass('resources/assets/sass/app.scss', 'resources/assets/css'); // from -- to


//Combine  all our css   file
    mix.styles(

        [
            'css/app.css',

            'bower/vendor/slick-carousel/slick/slick.css'


        ],  'public/css/all.css', 'resources/assets');   //Output file



    var bowerPath = 'bower/vendor';
    mix.scripts(
        [

            //jQuery
            bowerPath + '/jQuery/dist/jquery.min.js',


            //foundation js

            bowerPath + '/foundation-sites/dist/js/foundation.min.js',


            //Other dependencies

            bowerPath + '/slick-carousel/slick/slick.min.js'


        ], 'public/js/all.js', 'resources/assets');

});
