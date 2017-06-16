$(document).ready(function () {
    $('#posts-table').DataTable();
    $('#projects-table').DataTable();
    $('#tags').material_chip({
        placeholder: 'Enter a tag',
        secondaryPlaceholder: '+Tag',
    });
});
