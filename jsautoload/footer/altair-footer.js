jQuery(document).ready(function($) {
  // Toggle read more / less content
  var readMoreLink = '<a class="read-more-or-less panel-grid-cell" id="read-more-link" href="javascript:void(0);">Read More</a>';
  var readLessLink = '<a class="read-more-or-less panel-grid-cell" id="read-less-link" href="javascript:void(0);">Read Less</a>';

  $('#read-less').append(readMoreLink);
  $('#read-more').append(readLessLink);

  $('#read-more-link').click(function() {
    $('#read-more').show("fast");
    $('#read-more-link').hide();
  });

  $('#read-less-link').click(function() {
    $('#read-more').hide("fast");
    $('#read-more-link').show();
  });
});