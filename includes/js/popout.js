jQuery(document).ready(function($){


    $('.hamburger-menu').click(function(e){
        // $('.popout-menu').toggleClass('hide');
        $('.popout-menu').toggleClass('popout-is-open');
        $('.hamburger-menu').toggleClass('fa-bars');
        $('.hamburger-menu').toggleClass('fa-times');



    })

    var negative = "-";
    var popupHeight = $('.popout-menu').height();
    
    $('.header-layout').css('margin-bottom', negative.concat(popupHeight)+ "px")


});