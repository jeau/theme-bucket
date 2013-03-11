if (!Bucket) {
    var Bucket = {};
}

(function ($) {
  
    Bucket.mobileNav = function() {
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
    
    Bucket.showAdvancedForm = function () {
        var advancedForm = $('#advanced-form');
        var searchTextbox = $('#search-form input[type=text]');
        var searchSubmit = $('#search-form input[type=submit]');
        if (advancedForm) {
            advancedForm.css("display", "none");
            searchSubmit.addClass("with-advanced").after('<a href="#" id="advanced-search" class="button">Advanced Search</a>');
            advancedForm.click(function (event) {
                event.stopPropagation();
            });
            $("#advanced-search").click(function (event) {
                event.preventDefault();
                event.stopPropagation();
                advancedForm.appendTo("#search-form");
                advancedForm.slideToggle();
            });
        } else {
            $('#search-form input[type=submit]').addClass("blue button");
        }
    };

    
})(jQuery);