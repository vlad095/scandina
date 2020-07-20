/**
 * Document info: Scandina JavaScript File
 *     File name: cokkie_notice.js
 *        Author: Vladimir Maric
 *   
 *   Description: This file includes the necessery code that 
 *                displays the cookie banner with a notice.
 *              
 *     Copyright: © 2020 Scandina
 */

$(document).ready(function() { 
    if(localStorage.getItem('cookieSeen') !== 'shown') {
       $('.cookie-banner').delay(3000).fadeIn(2000);    
    }
     
    $('.cookie-banner-close').click(function(){
        if($(this).data('clicked', true)) {
            $('.cookie-banner').fadeOut();
            localStorage.setItem('cookieSeen', 'shown');
        } 
    });    
});

