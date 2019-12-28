// Search Script
new UISearch( document.getElementById( 'sb-search' ) );

	


    $(document).ready(function() {
     
      var owl = $("#owl-exclusive-single-carousel");
     
      owl.owlCarousel({
          items : 6, //10 items above 1000px browser width
          itemsDesktop : [1000,5], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [600,1], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          pagination : false
      });
     
      // Custom Navigation Events
      $(".owl-exclusive-single-carousel-next").click(function(){
        owl.trigger('owl.next');
      })
      $(".owl-exclusive-single-carousel-prev").click(function(){
        owl.trigger('owl.prev');
      })
     
    });


	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	

    var s = $("#sticker");
    var pos = s.position();                   
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();
        if (windowpos >= pos.top) {
            s.addClass("stick");
        } else {
            s.removeClass("stick");
        }

    });




$("#owl-video-carousel").owlCarousel({
 
    // Most important owl features
    items : 4,
})

$("#owl-ticker-carousel").owlCarousel({
 
    // Most important owl features
    items : 1, //10 items above 1000px browser width
    itemsDesktop : [1000,1], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,1], // betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0
    itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
    navigation : false,
    pagination : false,
    autoPlay : true,
    rewindSpeed : 100,
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp', 
})


    $(document).ready(function() {
     
      var owl = $("#owl-dont-miss-carousel");
     
      owl.owlCarousel({
          items : 1, //10 items above 1000px browser width
          itemsDesktop : [1000,1], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,1], // betweem 900px and 601px
          itemsTablet: [600,1], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          pagination : false,
          autoPlay : 5000,
          stopOnHover : true,          
      });
     
      // Custom Navigation Events
      $(".dontm-next").click(function(){
        owl.trigger('owl.next');
      })
      $(".dontm-prev").click(function(){
        owl.trigger('owl.prev');
      })
     
    });




    $(document).ready(function() {
     
      var owl = $("#owl-exclusive-carousel");
     
      owl.owlCarousel({
          items : 6, //10 items above 1000px browser width
          itemsDesktop : [1000,3], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [500,1], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          pagination : false,
          autoPlay : 5000,
          stopOnHover : true,
      });
     
      // Custom Navigation Events
      $(".exclu-nav-next").click(function(){
        owl.trigger('owl.next');
      })
      $(".exclu-nav-prev").click(function(){
        owl.trigger('owl.prev');
      })
     
    });










$("#owl-exclusive-single-carousel").owlCarousel({
 
    // Most important owl features
    items : 6,
    navigation : false,
    pagination : false,
    autoPlay : true
})

$(".mobile-menu").naver();



  $.simpleWeather({
    location: 'Dhaka',
    woeid: '',
    unit: 'c',
    success: function(weather) {
      html = '<h2><i class="symbol-weather  icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li>'+weather.city+'</li>';  
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });






    $(document).ready(function() {
     
      var owl = $("#trend-carousel");
     
      owl.owlCarousel({
          items : 3, //10 items above 1000px browser width
          itemsDesktop : [1000,1], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,1], // betweem 900px and 601px
          itemsTablet: [600,1], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          pagination : false,

          autoPlay : 2000,
          stopOnHover : true,          
      });
     
      // Custom Navigation Events
      $(".trend-next").click(function(){
        owl.trigger('owl.next');
      })
      $(".trend-prev").click(function(){
        owl.trigger('owl.prev');
      })
     
    });






    $(document).ready(function() {
     
      var owl = $("#highlight-carousel");
     
      owl.owlCarousel({
          items : 5, //10 items above 1000px browser width
          itemsDesktop : [1000,3], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [500,1], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          pagination : false,
          autoPlay : 2000,
          stopOnHover : true,
      });
     
      // Custom Navigation Events
      $(".highligh-nav-next").click(function(){
        owl.trigger('owl.next');
      })
      $(".highligh-nav-prev").click(function(){
        owl.trigger('owl.prev');
      })
     
    });





$(document).ready(function() {
    $('#left-menu').sidr({
      name: 'sidr-left',
      side: 'left' // By default
    });
    $('#right-menu').sidr({
      name: 'sidr-right',
      side: 'right'
    });
});




    $(document).ready(function() {
     
      var owl = $("#owl-exclusive-single-carousel");
     
      owl.owlCarousel({
          items : 6, //10 items above 1000px browser width
          itemsDesktop : [1000,5], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [600,1], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          pagination : false
      });
     
      // Custom Navigation Events
      $(".trend-nav-next").click(function(){
        owl.trigger('owl.next');
      })
      $(".trend-nav-prev").click(function(){
        owl.trigger('owl.prev');
      })
     
    });



 // Home Page Version 2 (Slider)

    $(document).ready(function() {
     
      var sync1 = $("#sync1");
      var sync2 = $("#sync2");
     
      sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: false,
        pagination: false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
      });
     
      sync2.owlCarousel({
        items : 4,
        itemsDesktop      : [1199,10],
        itemsDesktopSmall     : [979,10],
        itemsTablet       : [768,8],
        itemsMobile       : [479,4],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(0).addClass("synced");
        }
      });
     
      function syncPosition(el){
        var current = this.currentItem;
        $("#sync2")
          .find(".owl-item")
          .removeClass("synced")
          .eq(current)
          .addClass("synced")
        if($("#sync2").data("owlCarousel") !== undefined){
          center(current)
        }
      }
     
      $("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
      });
     
      function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2visible){
          if(num === sync2visible[i]){
            var found = true;
          }
        }
     
        if(found===false){
          if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
          }else{
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
          }
        } else if(num === sync2visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
          sync2.trigger("owl.goTo", num-1)
        }
        
      }



     
    });









     








