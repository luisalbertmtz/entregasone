
$(function () {
    toastr.options = {
        "closeButton": true,
        "timeOut": 7700,
        "extendedTimeOut": 0,
        "progressBar": true,
        "preventDuplicates": false,
        "positionClass": "toast-bottom-center",
        "tapToDismiss": false
    };
    if (localStorage.getItem("selected")) {
        $(".nav-link").removeClass("active");
        $(".nav-link#" + localStorage.getItem("selected")).addClass("active");
    } else {
        $(".nav-link#home").addClass("active");
    }
    $(".nav-link").on("click", function (event) {
        var selected = $(this).attr("link");
        localStorage.setItem("selected", selected);
    });
});

$(window).on('load', function () {
    loaded();
});

resize();

$(window).resize(function () {
    resize();
});

function loaded() {
    $(".preloader").removeClass("animated fadeIn");
    $(".preloader").addClass("animated fadeOut");
    $(".preloader").fadeOut();
}

function resize() {
    $("table").css("width", "100%");
}

