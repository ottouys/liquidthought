jQuery(document).ready(function ($) {
  $(document).ready(function () {
    // Tabs Init
    $("#tabs").tabs({
      heightStyle: "auto"
    });

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

    // Mobile Toggle
    $('.icon-hamburger').on('click', function (event) {
      $('header#masthead #site-navigation.main-navigation').addClass('mobile-toggle');
      $('.icon-hamburger').hide();
      $('.icon-close').show();
    });

    $('.icon-close').on('click', function (event) {
      $('header#masthead #site-navigation.main-navigation').removeClass('mobile-toggle');
      $('.icon-hamburger').show();
      $('.icon-close').hide();
    });
  });
});


