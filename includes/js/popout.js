jQuery(document).ready(function($){
    $('.menu-trigger').click(function(e){
//         // $('.popout-menu').toggleClass('hide');
        $('.popout-menu').toggleClass('popout-is-open');
        $('.menu-trigger').toggleClass('fa-bars');
        $('.menu-trigger').toggleClass('fa-times');
        $('.popout-background-target').toggleClass('popout-background');


    });


    $('.menu-item-has-children').click(function(e){
        $(this).children('.sub-menu').addClass("sub-menu-is-open");
        $('.sub-menu-back-target').addClass('sub-menu-back');

    })

    $('.sub-menu-back-target').click(function(e){
        $('.sub-menu').removeClass('sub-menu-is-open');
        $(this).removeClass('sub-menu-back');

    })
});