jQuery(document).ready(function($){
    $('.menu-trigger').click(function(e){
//         // $('.popout-menu').toggleClass('hide');
        $('.popout-menu').toggleClass('popout-is-open');
        $('.menu-trigger').toggleClass('fa-bars');
        $('.menu-trigger').toggleClass('fa-times');



    });
});