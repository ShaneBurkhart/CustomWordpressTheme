$(document).ready(function () {
  var $categorySelect = $('#category-select');
  var $nutritionFactsButton = $('#recipe-nutrition-facts');
  var $ingredientsButton  = $('#recipe-ingredients');
  var $desktopOverlay = $('#desktop-overlay');
  var $desktopOverlayImage = $('#desktop-overlay img');
  var $desktopOverlayExitButton  = $('#desktop-overlay #exit-button');

  $categorySelect.change(function (e) {
    location.href = '/blog?category=' + $(e.currentTarget).val();
  });


  $nutritionFactsButton.click(function (e) {
    $desktopOverlayImage.attr('src', $nutritionFactsButton.data('image'));
    $desktopOverlay.css('display', 'block');
  });

  $ingredientsButton.click(function (e) {
    $desktopOverlayImage.attr('src', $ingredientsButton.data('image'));
    $desktopOverlay.css('display', 'block');
  });

  $desktopOverlayExitButton.click(function (e) {
    $desktopOverlay.css('display', 'none');
  });
});
