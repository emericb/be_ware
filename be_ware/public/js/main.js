$(document).ready( function () {
    $('#myTable').dataTable( {
        "columnDefs": [
            { "searchable": false, "targets": [0,2,3,4,5] }
        ]
    } );
} );