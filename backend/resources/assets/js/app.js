var $ = window.jQuery =  require('jquery');
require('./materialize/bin/materialize.js');



$(document).ready(function () {
    $('.button-collapse').sideNav();
    $('.modal').modal();
    $('.carousel').carousel({
        fullWidth: true,
        indicators: true
    });
});

