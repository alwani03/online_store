$(function (){
    $(document).scroll(function(){
        $nav = $(".navbar-fixed-top");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
});