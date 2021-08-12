jQuery(document).ready(function ($) {
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
    });


    var zero = 0;
    $(document).ready(function () {
        $(window).on('scroll', function () {
            $('.navbar').toggleClass('hide', $(window).scrollTop() > zero);
            zero = $(window).scrollTop();
        })
    })

});

