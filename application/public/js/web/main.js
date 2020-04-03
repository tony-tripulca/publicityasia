$(() => {
    $('.hamburger').on('click', function(event) {
        if ($('.navbar-collapse').hasClass('show')) {
            $(this).removeClass('is-active');
        } else {
            $(this).addClass('is-active');
        }
    });
});