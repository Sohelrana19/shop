jQuery(function($) {

    $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
            .parent()
            .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    });

    $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
    });

    new WOW().init();

    //preloder
    // $(window).on('load', function() {
    //     $('#preloder').delay(1500).fadeOut(500)
    // });


    $('.datepicker').pickadate({
        today: '',
        clear: 'Clear selection',
        close: 'Cancel'
    })


});


$(document).ready(function() {
    $('#myTable').DataTable();

    // This file is required by the index.html file and will
    // be executed in the renderer process for that window.
    // All of the Node.js APIs are available in this process.
    window.$ = window.jquery = require('./node_modules/jquery');
    window.dt = require('./node_modules/datatables.net')();
    window.$('#table_id').DataTable();



});