$(function () {
  // Google Analytics Tracking

  // Links and Submits
  var track = function () {
    var x = $(this).attr('rel').split(';');
    if (!$(this).hasClass('tracked')) {
      ga('send', { 
        'hitType': 'event',
        'eventCategory': x[0],
        'eventAction': x[1],
        'eventLabel': x[2],
        'page': window.location['href'] 
      });
      $(this).addClass('tracked');
    }
  };
  $('.ga_click').click(track);
  $('.ga_submit').submit(track);

  // Social
  track_social = function(type) {
    return function () {
      var page = window.location.pathname.split('/').filter(function(x) { return x.length; }).pop();
      console.log('track_social');
      ga('send', { 
        'hitType': 'event',
        'eventCategory': 'social-click',
        'eventAction': type,
        'eventLabel': page.length ? page : 'homepage',
        'page': window.location.href
      });
    }
  };
  $('.st_facebook_vcount').on('click', window, track_social('fb-share'));
  $('.st_twitter_vcount').on('click', window, track_social('tweet'));
  $('.st_email_vcount').on('click', window, track_social('email'));
  $('.st_plusone_vcount').on('click', window, track_social('google-plus'));

  $('#applynow').on('click', window, function () {
    ga('send', {
      'hitType': 'pageview',
      'page': '/opt-in-success',
      'title': 'Opt-in Success'
    });
    track_apply('sidebar');
  });

  track_apply = function(type) {
    ga('send', { 
      'hitType': 'event',
      'eventCategory': 'application-click',
      'eventAction': type,
      'eventLabel': window.location.href.replace('http://thefoundation.com', ''),
      'page': window.location.href
    });
  }
  $('.site-nav a').on('click', window, function () {
    if ($(this).attr('title') == 'apply') {
      track_apply('header');
    }
  });

  // tracking the video
  if ($('.homepage-video').length)
    $('.homepage-video iframe.wistia_embed')[0].wistiaApi.bind('play', function () {
      ga('send', { 
        'hitType': 'event',
        'eventCategory': 'video',
        'eventAction': 'the-word',
        'eventLabel': 'homepage',
        'page': window.location.href
      });
    });
  if ($('.tour-video').length)
    $('.tour-video iframe.wistia_embed')[0].wistiaApi.bind('play', function () {
      ga('send', { 
        'hitType': 'event',
        'eventCategory': 'video',
        'eventAction': 'the-word',
        'eventLabel': 'tour',
        'page': window.location.href
      });
    });
    
  if ($('.homepage-video').length)
    $('.homepage-video iframe.wistia_embed')[0].wistiaApi.bind('end', function () {
      ga('send', { 
        'hitType': 'event',
        'eventCategory': 'video-complete',
        'eventAction': 'the-word',
        'eventLabel': 'homepage',
        'page': window.location.href
      });
    });
  if ($('.tour-video').length)
    $('.tour-video iframe.wistia_embed')[0].wistiaApi.bind('end', function () {
      ga('send', { 
        'hitType': 'event',
        'eventCategory': 'video-complete',
        'eventAction': 'the-word',
        'eventLabel': 'tour',
        'page': window.location.href
      });
    });

});