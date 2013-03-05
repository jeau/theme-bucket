if (!Omeka) {
    var Omeka = {};
}

(function ($) {
  
    Omeka.mobileNav = function() {
        $('#search-container').hide();
        $('#menu-container').hide();
        $('#top-nav > a').each( function() {
            $(this).click( function(e) {
                e.preventDefault();
                var hook = $(this).attr('href');
                hook = hook.replace('#','');
                $('#' + hook + '-container').slideToggle();
            });
        });
    }
    
})(jQuery);