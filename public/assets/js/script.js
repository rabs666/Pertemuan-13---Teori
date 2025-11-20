// Purple Admin Template JS
(function($) {
  'use strict';
  $(function() {
    var body = $('body');
    var sidebar = $('.sidebar');

    // Sidebar toggle
    $('#sidebarToggle, #sidebarToggleMobile').on('click', function(e) {
      sidebar.toggleClass('active');
      body.toggleClass('sidebar-icon-only');
    });

    // Add active class to current menu
    var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
    $('.nav li a', sidebar).each(function() {
      var $this = $(this);
      if (current === "") {
        if ($this.attr('href').indexOf("dashboard") !== -1) {
          $(this).parents('.nav-item').last().addClass('active');
          if ($(this).parents('.sub-menu').length) {
            $(this).addClass('active');
          }
        }
      } else {
        if ($this.attr('href').indexOf(current) !== -1) {
          $(this).parents('.nav-item').last().addClass('active');
          if ($(this).parents('.sub-menu').length) {
            $(this).closest('.collapse').addClass('show');
            $(this).addClass('active');
          }
        }
      }
    });

    // Hoverable collapse
    $('.sidebar .nav-item').on('mouseenter', function() {
      if (body.hasClass('sidebar-icon-only')) {
        $(this).find('.collapse').addClass('show');
      }
    });
    $('.sidebar .nav-item').on('mouseleave', function() {
      if (body.hasClass('sidebar-icon-only')) {
        $(this).find('.collapse').removeClass('show');
      }
    });
  });
})(jQuery);
