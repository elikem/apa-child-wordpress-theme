jQuery(document).ready(function() {
  // Logo Carousel
  jQuery(".slider").slick({
    draggable: true,
    autoplay: true,
    autoplaySpeed: 2000,
    centerMode: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ],

    dots: false,
    infinite: true,
    variableWidth: true
  });

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