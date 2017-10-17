var $ = window.jQuery = require('jquery');
require('datatables.net');
require('materialize-css');

$(document).ready(function () {
    $('.button-collapse').sideNav();
    $('#posts-table').DataTable({
        'order': [[3, 'desc']]
    });
    $('#projects-table').DataTable();
    $('#tags').material_chip({
        placeholder: 'Enter a tag',
        secondaryPlaceholder: '+Tag',
    });
});
