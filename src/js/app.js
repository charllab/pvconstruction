jQuery(function () {

  // remove WP Block element iframe classes
  if (jQuery('.wp-block-embed-youtube').length) {
    jQuery('.wp-block-embed-youtube').removeClass().addClass('embed-responsive-item');
  }

  var website = window.location.hostname;
  var internalLinkRegex = new RegExp('^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?'
    + website
    + ')|(localhost:\\d{4})|(\\/.*))(\\/.*)?$', '');

  // date picker
  if (jQuery('.datePickW input').length) {
    jQuery('.datePickW input').daterangepicker({
      startDate: moment(),
      endDate: moment().add(1, 'days')
    });
  }

  jQuery('#checkInForm').on('submit', function (e) {
    e.preventDefault();

    var data = jQuery(this).serialize(),
      inputVal = jQuery('#checkInAndOut').val(),
      inputVals = inputVal.split(' - ');

    location.href = "https://book.webrez.com/v31/#/property/2100/location/0/redirect?" + data + "&date_from=" + moment(inputVals[0]).format('YYYYMMDD') + "&date_to=" + moment(inputVals[1]).format('YYYYMMDD');
  });

  // owl carousel
  jQuery('.services-carousel').owlCarousel({
    loop: true,
    nav: true,
    navText: ['', ''],
    autoplay: false,
    slideSpeed: 2000,
    autoplaySpeed: 2000,
    items: 1,
    autoHeight: false
  });

  // Show tel number element on click
  jQuery('.js-show-tel').on('click', function () {
    var element = jQuery(this),
      rel = element.attr('rel');

    element.hide();
    jQuery('#' + rel).removeClass('d-none');

    // Track phone clicks
    trackEvent('Click', {
      category: 'Phone',
      label: window.location.href,
      value: 3000
    });

    element.removeClass('.js-show-tel');
  });

  // Show tel number element on click
  jQuery('.js-track-tel-click').on('click', function () {
    // Track phone clicks
    trackEvent('Click', {
      category: 'Phone',
      label: window.location.href,
      value: 3000
    });
  });

  // Scrolling anchors
  jQuery('.scrollable-anchor').on('click', function (e) {
    e.preventDefault();

    jQuery('html,body').animate({
      scrollTop: jQuery(this.hash).offset().top
    }, 1000);
  });
});

var trackEvent = function (name, options) {
  trackGA(name, options);
  trackPixel(name, options);
};

var trackGA = function (name, options) {
  if (typeof gtag !== 'undefined') {
    gtag('event', name, {
      'event_category': options.category,
      'event_label': options.label,
      'value': options.value || 0
    });
  }
};

var trackPixel = function (name, options) {
  if (typeof gtag !== 'undefined') {
    fbq('track', 'Lead', {
      'event_category': options.category,
      'event_action': name,
      'value': options.value || 0,
      'currency': 'CAD'
    });
  }
};