document.addEventListener("touchstart", function(){}, true);

function checkOffset() {
    if($('.flying').offset().top + $('.flying').height() >= $('footer').offset().top){
        $('.flying').css({position:'fixed', right: '20px', bottom: ($('footer').height() + 20) + 'px'});
    }
    if($(document).scrollTop() + window.innerHeight < $('footer').offset().top){
        $('.flying').css({
            position:'fixed', right: '20px', bottom: '20px'
        }); 
    // restore when you scroll up
    }
}

$( document ).ready(function() {
    
    $('body').removeClass('fade-out');

    // $(window).on("resize", function () {
    if ($("body").hasClass("malu")) {
        var s_window_height = $(window).height();
        var s_header_height = $('header').innerHeight();
        var s_hero_margin_bottom = parseInt($( '.heroslider_container' ).css( "margin-bottom" ),10);
        var s_hero_padding_bottom = parseInt($( '.heroslider_container' ).css( "padding-bottom" ),10);
        var s_hero_padding_top = parseInt($( '.heroslider_container' ).css( "padding-top" ),10);
        var space_available = 0;
        var space_available_for_section = s_window_height - s_header_height;
        space_available = s_window_height - s_header_height - s_hero_margin_bottom - s_hero_padding_bottom - s_hero_padding_top;
        $('.heroslider_container .slide').css({
            height: space_available
        }); 
        $('#heroslider').css({
            height: space_available_for_section
        }); 
    }
    // }).resize();

  // console.log('ready');
    // var windowwidth = $(window).width();

    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {

            // if (windowwidth > 767) {
            //     headerheight_for = 86
            // }else{
            //     headerheight_for = 61
            // }


          if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').stop().animate({
                scrollTop: target.offset().top - $('header').innerHeight()
              }, 1000);
              return false;
            }
          }
        });
    });

    if ( $(".flying").length){
        
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 50,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 400,
        //grab the "back to top" link
        $back_to_top = $('.cd__top');

        //hide or show the "back to top" link
        $(window).scroll(function(){
            checkOffset();
            if( $(this).scrollTop() > offset ) { 
                $back_to_top.addClass('cd__is-visible');
            } else {
                $back_to_top.removeClass('cd__is-visible cd__fade-out');
            } 
            if( $(this).scrollTop() > offset_opacity ) { 
                $back_to_top.addClass('cd__fade-out');
            }
        });

        //smooth scroll to top
        $back_to_top.on('click', function(event){
          event.preventDefault();
          $('body,html').animate({
              scrollTop: 0 ,
              }, scroll_top_duration
          );
        });

    }

    //hamburger menu
    $('.hamburger-menu, .bodyoverlay').on('click', function() {
        $('.bar').toggleClass('animate');
        var headerheight = $('header').innerHeight();
        $('nav').toggleClass('visible').css("top", headerheight);
        $('.bodyoverlay').toggleClass('cover-bg');
    });

    //adding class to menu items
    // $(".menu-item").click(function() {
    //     $('.menu-item').not(this).removeClass('active');
    //     $(this).addClass('active');
    // });

    // default menu active status
    $("nav > ul.menu > li").first().addClass( "active" );

    //Highlight Menu Item when Scrolling Down to Section
    // $(window).on("scroll", function () {

    //     var headerheight = $('header').innerHeight();
    //     $('nav').css("top", headerheight);
    //     $('nav').removeClass('visible');
    //     $('.bar').removeClass('animate');
    //     $('.bodyoverlay').removeClass('cover-bg');

    //     var position = $(this).scrollTop() + ($('header').innerHeight());

    //     $('section').each(function() {

    //         var target = $(this).offset().top;
    //         var id = $(this).attr('id');
            
    //         if (position >= target) {
    //             $('a[href!=#' + id + ']').parent().removeClass('active');
    //           $('nav > ul > li').removeClass('active');
    //           $('nav > ul > li > a[href=#' + id + ']').parent().addClass('active');
    //         }
    //     });
    // }).scroll();

    // Cache selectors
    var lastId,
        topMenu = $(".menu"),
        topMenuHeight = 86,
        // All list items
        menuItems = topMenu.find("a:not(:last-child)"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
        });

    // Bind to scroll
    $(window).on("scroll", function () {

        var headerheight = $('header').innerHeight();
        $('nav').css("top", headerheight);
        $('nav').removeClass('visible');
        $('.bar').removeClass('animate');
        $('.bodyoverlay').removeClass('cover-bg');

        // Get container scroll position
        var fromTop = $(this).scrollTop()+topMenuHeight;
       
        // Get id of current scroll item
        var cur = scrollItems.map(function(){
            if ($(this).offset().top < fromTop){
                return this;
            }
        });
        // Get the id of the current element
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : "";
       
        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href=#"+id+"]").parent().addClass("active");
        }                   
    }).scroll();

    //to set up the min heigth of the what we do section
    $(window).on("resize", function () {
        // console.log('ca');
        var highest = null;
        var hi = 0;
        $(".wwd_slide").each(function() {
            var h = $(this).innerHeight();
            if (h > hi) {
                hi = h;
                highest = $(this);
            }
        });
        // console.log('ca',hi.innerHeight());
        // highest.css("background-color", "red");
        $("#wwd_slides").css("min-height", hi + "px");
    }).resize();

    //to set up the min heigth of slider in the collection section
    $(window).on("resize", function () {
        // console.log('ca');
        var highest_c = null;
        var hi_c = 0;
        $(".collection_slider_container").each(function() {
            var h_c = $(this).innerHeight();
            if (h_c > hi_c) {
                hi_c = h_c;
                highest_c = $(this);
            }
        });
        // console.log('ca',hi.innerHeight());
        // highest.css("background-color", "red");
        $(".cc_view").css("min-height", hi_c + "px");
    }).resize();


    if ( $("#collections").length){
        $("#collections .collections_container .collection").first().addClass( "active" );
        $("#view_collections .cc_menu .cc_menu_item").first().addClass( "active" );
        $(".cc_view .collection_slider_container").first().addClass( "active" ).css('visibility', 'visible'); 

        var _current_index = 0;
        $("#collections .collections_container .collection, #view_collections .cc_menu .cc_menu_item").click(function(e){
            e.preventDefault();
            // tab navigation styles
            var _this = $(this);
            var _index = _this.index();
            if(_current_index !== _index){
                $("#collections .collections_container .collection, #view_collections .cc_menu .cc_menu_item").each(function(){
                    if($(this).hasClass("active")) {$(this).removeClass("active");}
                });
                // _this.addClass("active");
                $("#collections .collections_container .collection").eq(_index).addClass("active");
                $("#view_collections .cc_menu .cc_menu_item").eq(_index).addClass("active");

                // show slider
                $(".collection_slider_container.active").removeClass("active").css('visibility', 'hidden'); 
                setTimeout(function(){
                    $(".collection_slider_container").eq(_index).css('visibility', 'visible'); 
                    $(".collection_slider_container").eq(_index).addClass("active");
                },50);

                _current_index = _index;
            }
        });

    }


    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 30) {
            $("header").addClass("scroll");
        } else {
            $("header").removeClass("scroll");
        }
    });

    $(window).on("load resize scroll",function(){
        $("main").css("padding-top", $("header").innerHeight());
    });

});

//to have the fixed header
// (function() {
//   'use strict';

//     var m = document.querySelector("main"),
//         h = document.querySelector("header"),
//         hHeight;

//     function setTopPadding() {
//         hHeight = h.offsetHeight;
//         m.style.paddingTop = hHeight + "px";
//     }

//     function onScroll() {
        
//         function callbackFunc() {
//             var y = window.pageYOffset;
//             if (y > 30) {
//                 h.classList.add("scroll");
//             } else {
//                 h.classList.remove("scroll");
//             }
//         }
//         window.addEventListener("scroll", callbackFunc);
//     }

//     window.onload = function() {
//         setTopPadding();
//         onScroll();
//     };

//     window.onresize = function() {
//         setTopPadding();
//     };
// })();

