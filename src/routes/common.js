export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://localhost:4001/wp-json/wp/v2/posts",
      "method": "GET",
      "headers": {
        "per_page": "25",
        "status": "all",
        "Cache-Control": "no-cache",
        "Postman-Token": "24bedff3-3b8e-4aa0-add2-1e7f7933fad5"
      }
    }

    jQuery(document).ready(function($) {
      $.ajax(settings).done(function(response) {
        console.log(response);
      });
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};