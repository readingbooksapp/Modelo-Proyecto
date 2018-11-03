//----------------------------------------------------------------
// >>> TABLE OF CONTENTS:
//----------------------------------------------------------------

// 01. Mobile Menu
// 02. Header Dropdown Menu
// 03. Select List (Dropdown)
// 04. Facts Counter
// 05. Category Filter (MixItUp Plugin)
// 06. Vertical Tabs
// 07. Blog Tags (Tooltip)
// 08. Owl Carousel
// 09. Sidebar Accordion
// 10. Responsive Tabs
// 11. Responsive Table
// 12. Form Fields (Value Disappear on Focus)
// 13. Bootstrap Carousel Swipe (Testimonials Carousel)
// 14. Bx Carousel
// 15. Contact Form Submit/Validation
// 16. Masonry

//----------------------------------------------------------------


$(function () {
  //Select List (Dropdown)
    //--------------------------------------------------------
    var selectObj = $('select');
    var selectListObj = $('ul.select-list');
    selectObj.each(function () {
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
      'class': 'select-list'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
      $('<li />', {
        text: $this.children('option').eq(i).text(),
        rel: $this.children('option').eq(i).val()
      }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.on('click', function (e) {
      e.stopPropagation();
      $('div.select-styled.active').not(this).each(function () {
        $(this).removeClass('active').next(selectListObj).hide();
      });
      $(this).toggleClass('active').next(selectListObj).toggle();
    });

    $listItems.on('click', function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
    });

    $(document).on('click', function () {
      $styledSelect.removeClass('active');
      $list.hide();
    });

  });


  //Owl Carousel
  //--------------------------------------------------------
 /* var owlObj = $('.owl-carousel');
  owlObj.owlCarousel({
    loop: false,
    margin: 30,
    nav: false,
    dots: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 2
      }
    }
  });
  var owlEventObj = $('.owl-carousel-event');
    owlEventObj.owlCarousel({
    loop: false,
    margin: 30,
    nav: false,
    dots: true,
    responsiveClass: true,
    responsive: {
      0: {
          items: 1
      },
      768: {
          items: 2
      },
      1200: {
          items: 3
      }
    }
  });*/

  //Bootstrap Carousel Swipe (Testimonials Carousel)
  //--------------------------------------------------------
  /*var testimonialsObj = $("#testimonials");
  testimonialsObj.swiperight(function () {
      $(this).carousel('prev');
  });
  testimonialsObj.swipeleft(function () {
      $(this).carousel('next');
  });*/
  //Sidebar Accordion
  //--------------------------------------------------------
  var secondaryObj = $('#secondary [data-accordion]');
  var multipleObj = $('#multiple [data-accordion]');
  var singleObj = $('#single[data-accordion]');

  secondaryObj.accordion({
    singleOpen: true
  });

  multipleObj.accordion({
    singleOpen: false
  });

  singleObj.accordion({
    transitionEasing: 'cubic-bezier(0.455, 0.030, 0.515, 0.955)',
    transitionSpeed: 200
  });
  //Responsive Tabs
  //--------------------------------------------------------
  var restabObj = $('#responsiveTabs');
  restabObj.responsiveTabs({
    startCollapsed: 'accordion'
  });

  //Responsive Tables
  //--------------------------------------------------------
  var tableObj = $('.table');
  var shoptableObj = $('.shop_table');
  tableObj.basictable({
    breakpoint: 991
  });

  shoptableObj.basictable({
    breakpoint: 991
  });
})