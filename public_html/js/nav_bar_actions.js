$(function() {
    $('.dropdown').children('.dropdown-content').css('top', $('.dropdown').height());
    $(".dropdown").hover(function () {
        $(".dropdown-content").css('display', 'block');
    }, 
    function () {
        $(".dropdown-content").css("display", "none");  
    });
});