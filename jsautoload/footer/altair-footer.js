jQuery(document).ready(function() {
  // Toggle read more / less content
  var readMoreLinkString = '<a class="read-more-or-less panel-grid-cell read-more-link" href="javascript:void(0);">Read More</a>';
  var readLessLinkString = '<a class="read-more-or-less panel-grid-cell read-less-link" href="javascript:void(0);">Read Less</a>';

  jQuery('.read-more').hide();

  jQuery('.read-less').append(readMoreLinkString);
  jQuery('.read-more').append(readLessLinkString);

  jQuery('.read-more-link').click(function() {
    jQuery('.read-more').show("fast");
    jQuery('.read-more-link').hide();
  });

  jQuery('.read-less-link').click(function() {
    jQuery('.read-more').hide("fast");
    jQuery('.read-more-link').show();
  });
});