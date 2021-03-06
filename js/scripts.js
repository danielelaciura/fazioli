/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document) {

  'use strict';

  // To understand behaviors, see https://drupal.org/node/756722#behaviors
  Drupal.behaviors.my_custom_behavior = {
    attach: function (context, settings) {


      (function () {
        var first = $("#color-selector").val();
        $('#gallery img.' + first).addClass('visible');

        $('select').on('change', function() {
            $('#gallery img.' + this.value).addClass('visible');

            $('#gallery img').not('.'+this.value).removeClass('visible');
        })
      })();




      function swapImage() {
        alert(this);
      };

    }
  };

})(jQuery, Drupal, this, this.document);
