/*-----------------------------------------------------*/
/*------------- Scandina JS Script File ---------------*/
/*------------- Animated Social Counter ---------------*/
/*-------------- Author: Vladimir Maric ---------------*/
/*-----------------------------------------------------*/

var counterValue = 0;

$(window).scroll(function() {
    var myHeight = $('.counter').offset().top - window.innerHeight;
    
    if (counterValue === 0 && $(window).scrollTop() > myHeight) {
        $('.counter-value-number').each(function() {
            var $this = $(this), 
            countTo = $this.attr('data-count');
            
            $({countNum: $this.text()}).animate({countNum: countTo},
            {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
        
        counterValue = 1;
    }

});


