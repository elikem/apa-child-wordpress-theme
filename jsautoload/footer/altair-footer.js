jQuery(document).ready(function($) {
  var tourButton = $('a.ow-button-hover');

  if (tourButton.find('span').text().trim() == 'VIEW TOURS') {
    console.log('true');

    tourButton.attr('href', '/asia-a-la-carte-tours/');
  }
});