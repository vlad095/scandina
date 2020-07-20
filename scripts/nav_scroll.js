/**
 * Document info: Scandina JavaScript File
 *     File name: nav_scroll.js
 *        Author: Vladimir Maric
 *
 *   Description: Simple function that changes the appearance 
 *                of the navbar when scrolled from top.
 *
 *     Copyright: © 2020 Scandina
 */

$(document).scroll(function() {
    var scrollPosition = $(this).scrollTop();
    var screenWidth = $(window).width();
    
    if (scrollPosition === 0 && screenWidth > 990) {
        /* Shows top-bar if scrolled to top and screen width is bigger than 990px */
        $('#top-bar').fadeIn(1);
        document.getElementById("navbar").style.top = "32px";
    } else {
        /* Otherwise, the top-bar is not shown */
        $('#top-bar').fadeOut(1);
        document.getElementById("navbar").style.top = "0";
    }    
});
