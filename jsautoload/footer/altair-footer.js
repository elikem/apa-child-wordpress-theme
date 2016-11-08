jQuery(document).ready(function($) {
  var tourButton = $('a.ow-button-hover');
  if (tourButton.find('span').text().trim() == 'VIEW TOURS') {
    tourButton.attr('href', '/asia-a-la-carte-tours/');
  }

  var bookTour = jQuery('.ow-button-hover[href="#book-tour"]');
  jQuery(bookTour).click(function () {
    window.location.href = '/request-a-catalog/';
  })
});