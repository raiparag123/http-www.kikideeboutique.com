$(document).ready(function() {

  $('ul li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});
  //image enlarger..

  $('.fancybox').fancybox();
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
      });
      
  var bigimage = $("#big");
  var thumbs = $("#thumbs");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage
    .owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: true,
    autoplay: false,
    dots: false,
    loop: true,
    // responsiveRefreshRate: 200,
    // navText: [
    //   '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
    //   '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    // ]
  })
    .on("changed.owl.carousel", syncPosition);

  thumbs
    .on("initialized.owl.carousel", function() {
    thumbs
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
    items: 4,
    dots: true,
    nav: true,
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 4,
    responsiveRefreshRate: 100
  })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs.find(".owl-item.active").length - 1;
    var start = thumbs
    .find(".owl-item.active")
    .first()
    .index();
    var end = thumbs
    .find(".owl-item.active")
    .last()
    .index();

    if (current > end) {
      thumbs.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage.data("owl.carousel").to(number, 300, true);
  });



///Big 1 changed

var bigimage1 = $("#big1");
  var thumbs1 = $("#thumbs1");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage1
    .owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: true,
    autoplay: false,
    dots: false,
    loop: true,
    // responsiveRefreshRate: 200,
    // navText: [
    //   '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
    //   '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    // ]
  })
    .on("changed.owl.carousel", syncPosition1);

  thumbs1
    .on("initialized.owl.carousel", function() {
    thumbs1
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
    items: 4,
    dots: true,
    nav: true,
    navText: [
      '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    ],
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 4,
    responsiveRefreshRate: 100
  })
    .on("changed.owl.carousel", syncPosition21);

  function syncPosition1(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs1
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs1.find(".owl-item.active").length - 1;
    var start = thumbs1
    .find(".owl-item.active")
    .first()
    .index();
    var end = thumbs1
    .find(".owl-item.active")
    .last()
    .index();

    if (current > end) {
      thumbs1.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs1.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition21(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage1.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs1.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage1.data("owl.carousel").to(number, 300, true);
  });
  
  ///Big 2 changed


var bigimage2 = $("#big2");
var thumbs2 = $("#thumbs2");
//var totalslides = 10;
var syncedSecondary = true;

bigimage2
  .owlCarousel({
  items: 1,
  slideSpeed: 2000,
  nav: true,
  autoplay: false,
  dots: false,
  loop: true,
  // responsiveRefreshRate: 200,
  // navText: [
  //   '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
  //   '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
  // ]
})
  .on("changed.owl.carousel", syncPosition1);

thumbs2
  .on("initialized.owl.carousel", function() {
  thumbs2
    .find(".owl-item")
    .eq(0)
    .addClass("current");
})
  .owlCarousel({
  items: 4,
  dots: true,
  nav: true,
  navText: [
    '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
    '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
  ],
  smartSpeed: 200,
  slideSpeed: 500,
  slideBy: 4,
  responsiveRefreshRate: 100
})
  .on("changed.owl.carousel", syncPosition21);

function syncPosition1(el) {
  //if loop is set to false, then you have to uncomment the next line
  //var current = el.item.index;

  //to disable loop, comment this block
  var count = el.item.count - 1;
  var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

  if (current < 0) {
    current = count;
  }
  if (current > count) {
    current = 0;
  }
  //to this
  thumbs2
    .find(".owl-item")
    .removeClass("current")
    .eq(current)
    .addClass("current");
  var onscreen = thumbs2.find(".owl-item.active").length - 1;
  var start = thumbs2
  .find(".owl-item.active")
  .first()
  .index();
  var end = thumbs2
  .find(".owl-item.active")
  .last()
  .index();

  if (current > end) {
    thumbs2.data("owl.carousel").to(current, 100, true);
  }
  if (current < start) {
    thumbs2.data("owl.carousel").to(current - onscreen, 100, true);
  }
}

function syncPosition21(el) {
  if (syncedSecondary) {
    var number = el.item.index;
    bigimage2.data("owl.carousel").to(number, 100, true);
  }
}

thumbs2.on("click", ".owl-item", function(e) {
  e.preventDefault();
  var number = $(this).index();
  bigimage2.data("owl.carousel").to(number, 300, true);
});

// Big image 0


var bigimage0 = $("#big0");
var thumbs0 = $("#thumbs0");
//var totalslides = 10;
var syncedSecondary = true;

bigimage0
  .owlCarousel({
  items: 1,
  slideSpeed: 2000,
  nav: true,
  autoplay: false,
  dots: false,
  loop: true,
  // responsiveRefreshRate: 200,
  // navText: [
  //   '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
  //   '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
  // ]
})
  .on("changed.owl.carousel", syncPosition1);

thumbs0
  .on("initialized.owl.carousel", function() {
  thumbs0
    .find(".owl-item")
    .eq(0)
    .addClass("current");
})
  .owlCarousel({
  items: 4,
  dots: true,
  nav: true,
  navText: [
    '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
    '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
  ],
  smartSpeed: 200,
  slideSpeed: 500,
  slideBy: 4,
  responsiveRefreshRate: 100
})
  .on("changed.owl.carousel", syncPosition21);

function syncPosition1(el) {
  //if loop is set to false, then you have to uncomment the next line
  //var current = el.item.index;

  //to disable loop, comment this block
  var count = el.item.count - 1;
  var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

  if (current < 0) {
    current = count;
  }
  if (current > count) {
    current = 0;
  }
  //to this
  thumbs0
    .find(".owl-item")
    .removeClass("current")
    .eq(current)
    .addClass("current");
  var onscreen = thumbs0.find(".owl-item.active").length - 1;
  var start = thumbs0
  .find(".owl-item.active")
  .first()
  .index();
  var end = thumbs0
  .find(".owl-item.active")
  .last()
  .index();

  if (current > end) {
    thumbs0.data("owl.carousel").to(current, 100, true);
  }
  if (current < start) {
    thumbs0.data("owl.carousel").to(current - onscreen, 100, true);
  }
}

function syncPosition21(el) {
  if (syncedSecondary) {
    var number = el.item.index;
    bigimage0.data("owl.carousel").to(number, 100, true);
  }
}

thumbs0.on("click", ".owl-item", function(e) {
  e.preventDefault();
  var number = $(this).index();
  bigimage0.data("owl.carousel").to(number, 300, true);
});



});