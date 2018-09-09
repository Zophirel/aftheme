jQuery(document).ready(function() {
 if (jQuery('[data-background]').length > 0) {
      jQuery('[data-background]').each(function() {
        var jQuerybackground, jQuerybackgroundmobile, jQuerythis;
        jQuerythis = jQuery(this);
        jQuerybackground = jQuery(this).attr('data-background');
        jQuerybackgroundmobile = jQuery(this).attr('data-background-mobile');
        if (jQuerythis.attr('data-background').substr(0, 1) === '#') {
          return jQuerythis.css('background-color', jQuerybackground);
        } else if (jQuerythis.attr('data-background-mobile') && device.mobile()) {
          return jQuerythis.css('background-image', 'url(' + jQuerybackgroundmobile + ')');
        } else {
          return jQuerythis.css('background-image', 'url(' + jQuerybackground + ')');
        }
      });
    }
  });
jQuery(document).ready(function(){
  jQuery('.ct-slick-homepage').slick({
    autoplay: true,
    autoplaySpeed: 3000,
  });
});