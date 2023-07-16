jQuery(document).ready(function ($) {
  $(document).ready(function () {
    // Tabs Init
    $("#tabs").tabs();

    // Sub Menu Toggle
    $('.menu > li.menu-item-has-children > a').click(function (event) {
      event.preventDefault();
      $(this).siblings('.sub-menu').slideToggle('slow');

      console.log("Menu Clicked");
    });

    // Hide menu
    $(document).click(function (event) {
      if (!$(event.target).parents("li").hasClass('menu-item')) {
        $(".sub-menu").hide();
      }
    });
  });
});


