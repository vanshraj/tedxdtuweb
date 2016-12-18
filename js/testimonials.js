$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
$('a[data-slide="prev"]').off();
$('a[data-slide="next"]').off();
$('a[data-slide="prev"]').click(function() {
  $('#quote-carousel').carousel('prev');
});

$('a[data-slide="next"]').click(function() {
  $('#quote-carousel').carousel('next');
});