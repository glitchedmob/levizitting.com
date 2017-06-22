var $ = window.jQuery = require('jquery');
require("./datatables.js");
require('./materialize/bin/materialize.js');

$(document).ready(function () {
    $(".button-collapse").sideNav();
    $('#posts-table').DataTable();
    $('#projects-table').DataTable();
    $('#tags').material_chip({
        placeholder: 'Enter a tag',
        secondaryPlaceholder: '+Tag',
    });
});
