$(window).on('load', function () {
    loaded();
});
function loaded() {
    $(".preloader").removeClass("animated fadeIn");
    $(".preloader").addClass("animated fadeOut");
    $(".preloader").fadeOut();
}