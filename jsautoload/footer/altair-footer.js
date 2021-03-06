jQuery(document).ready(function($) {
  var tourButton = $('a.ow-button-hover');
  if (tourButton.find('span').text().trim() == 'VIEW TOURS') {
    tourButton.attr('href', '/asia-a-la-carte-tours/');
  }

  var bookTour = $('.ow-button-hover[href="#book-tour"]');
  $(bookTour).click(function () {
    window.location.href = '/request-a-catalog/';
  });

  var newAndNewsLink = '<p style="padding: 10px; text-decoration: underline;"><a href="/new-and-news/">Click here to read our newsletter</a></p>';
  var newAndNewsNode = $('.sidebar_widget.three .widget_sow-contact-form');
  newAndNewsNode.append(newAndNewsLink);
});