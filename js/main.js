// Ecriture qui défile
$(document).ready(function() {

 // typing animation
  (function($) {
    $.fn.writeText = function(content) {
        var contentArray = content.split(""),
            current = 0,
            elem = this;
            setInterval(function() {
            if(current < contentArray.length) {
                elem.text(elem.text() + contentArray[current++]);
            }
        }, 100);
    };

 })(jQuery);

 // input text for typing animation
  $("#holder").writeText("Recherche un stage dans le domaine du web.");
})

// $(document).snowfall();
//
// $(window).resize(() => {
//     $(document).snowfall('clear');
//     $(document).snowfall();
// });
