$(function () {
  var track = function () {
    var x = $(this).attr('rel').split(';');
    ga('send', 'event', x[0], x[1], [2], { loc: window.location + '' });
  };
  $('.ga_click').click(track);
  $('.ga_submit').submit(track);
});