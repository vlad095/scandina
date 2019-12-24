/*-----------------------------------------------------*/
/*------------- Scandina JS Script File ---------------*/
/*------------- Navigation Scroll Rules ---------------*/
/*-------------- Author: Vladimir Maric ---------------*/
/*-----------------------------------------------------*/

$(document).scroll(function () {
    var scrollPosition = $(this).scrollTop();
    var screenWidth = $(window).width();
    
    if (scrollPosition === 0 && screenWidth > 990) {
        /* Shows top-bar if scrolled to top and screen width is bigger than 990px */
        $('#top-bar').fadeIn(1);
    } else {
        /* Otherwise, the top-bar is not shown */
        $('#top-bar').fadeOut(1);
    }
});
