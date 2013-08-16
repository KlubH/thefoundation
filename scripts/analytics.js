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
});