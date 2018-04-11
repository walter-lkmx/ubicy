export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');

    jQuery(document).ready(function($) {
      $('.first-posts').slice( 4 ).addClass('two-stack');
      $('.two-stack').wrapAll('<div class="stack" />');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};