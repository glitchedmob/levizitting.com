var $ = window.jQuery =  require('jquery');
require('materialize-css');



$(document).ready(function () {
    $('.button-collapse').sideNav();
    $('.modal').modal();
    $('.carousel').carousel({
        fullWidth: true,
        indicators: true
    });
});

require("./g-analytics.js");