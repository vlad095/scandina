/*-----------------------------------------------------*/
/*------------- Scandina JS Script File ---------------*/
/*-------------- Cookies Notice Banner ----------------*/
/*-------------- Author: Vladimir Maric ---------------*/
/*-----------------------------------------------------*/

$(document).ready(function() { 
    if (localStorage.getItem('cookieSeen') !== 'shown') {
       $('.cookie-banner').delay(3000).fadeIn(2000);    
    }
     
    $('.cookie-banner-close').click(function(){
        if ($(this).data('clicked', true)) {
            $('.cookie-banner').fadeOut();
            localStorage.setItem('cookieSeen', 'shown');
        } 
    });
    
});

