// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
  // All pages
  common: {
    init: function() {
      // JS here
    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
    jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({
            keyboardNavEnabled: true, // Navigate slider with keyboard left and right arrows.
            autoScaleSlider: true, // Automatically updates slider height based on base width.
            imageScaleMode: 'fill', // Scale mode for images. "fill", "fit", "fit-if-smaller" or "none".
            controlNavigation: 'none', // Navigation type, can be 'bullets', 'thumbnails', 'tabs' or 'none'
            slidesSpacing: 0 // Spacing between slides in pixels.
        });
    });
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ExampleSite;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);
