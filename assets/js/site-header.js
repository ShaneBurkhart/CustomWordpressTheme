$(document).ready(function () {
  var $header = $('header');
  var isFirst = true;

  $(document).scroll(function (e) {
    var documentScrollTop = $(document).scrollTop();
    console.log(documentScrollTop);

    if (documentScrollTop) {
      if (!$header.hasClass('scroll-collapse')) {
        if (isFirst) {
          $header.addClass('scroll-collapse');
          isFirst = false;
        } else {
          $header.css({ 'height': '75px' }).animate({ height: '55px' }, 100).addClass('scroll-collapse');
        }
      }
    } else {
      if ($header.hasClass('scroll-collapse')) {
        $header.css({ 'height': '100px' }).removeClass('scroll-collapse');
      }
    }
  });
});
