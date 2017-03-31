$(document).ready(function () {
  var $header = $('header');
  var $mobileNavDrawer = $('header .mobile-nav-drawer');
  var $mobileDrawerButton = $('#mobile-drawer-button');
  var $mobileDrawerCloseButton = $('#mobile-drawer-close-button');
  var $desktopSearchButton = $('#desktop-search-button');
  var $desktopSearchOverlay = $('#desktop-search-overlay');
  var $desktopSearchFormButton = $desktopSearchOverlay.find('.fa-search');
  var $desktopSearchOverlayExitButton  = $desktopSearchOverlay.find('#exit-button');
  var isFirst = true;

  // Change header when scrolling
  $(document).scroll(function (e) {
    var documentScrollTop = $(document).scrollTop();

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

  $mobileDrawerButton.click(function (e) {
    if (!$mobileNavDrawer.hasClass('nav-open')) {
      $mobileNavDrawer.animate({ 'right': 0 }, 200).addClass('nav-open')
    } else {
      $mobileNavDrawer.animate({ 'right': '100%' }, 200).removeClass('nav-open')
    }
  });

  $mobileDrawerCloseButton.click(function (e) {
    if (!$mobileNavDrawer.hasClass('nav-open')) {
      $mobileNavDrawer.animate({ 'right': 0 }, 200).addClass('nav-open')
    } else {
      $mobileNavDrawer.animate({ 'right': '100%' }, 200).removeClass('nav-open')
    }
  });

  $desktopSearchButton.click(function (e) {
    $desktopSearchOverlay.css('display', 'block');
  });

  $desktopSearchOverlayExitButton.click(function (e) {
    $desktopSearchOverlay.css('display', 'none');
  });
});
