$(document).ready(function () {
  var $categorySelect = $('#category-select');

  $categorySelect.change(function (e) {
    console.log('asdf');
    location.href = '/blog?category=' + $(e.currentTarget).val();
  });
});
