if ( $("#whatwedo").length){

    var $menu;
    var $menuOffset;
    var $current;
    var $currentOffset;
    var $currentWidth;
    var $underline;
    var $current_index = -1;
    var windowwidth = 0;



    function slider() {
        $(".wwd_menu_item").removeClass('active');
        $(".wwd_slide").removeClass('active');

        $(".wwd_menu .wwd_menu_item:first").addClass('active');
        $("#wwd_slides .wwd_slide:first").addClass('active');

        $menu = $(".wwd_menu");
        $menuOffset = $menu.offset().left;
        $current = $menu.find(".active");
        $currentOffset = $current.offset().left - $menuOffset + ($current.width()/2) - 5;
        $currentWidth = $current.width();
        
        $underline = $menu.find("span.underline");

        $underline.css({
            left: $currentOffset,
        });
    }

    if ($(window).width() > 647) {
        slider();
    }
      
    $('.wwd_menu_item').click( function (e) {
        e.preventDefault();

        var _index = $(this).index();
        if($current_index !== _index){
            $(".wwd_slide").removeClass('active');
            $(".wwd_slide").eq(_index).addClass('active');

            $(".wwd_menu_item").removeClass('active');
            $(this).addClass('active');

            if ($(window).width() < 650) {
               $('.wwd_mi_body').slideUp(300).removeClass('active');
               $(this).find('.wwd_mi_body').slideDown(300).addClass('active');
            }

            $current_index = _index;
        }else{
            // $(".wwd_slide").removeClass('active');
            $(".wwd_menu_item").removeClass('active');
            $('.wwd_mi_body').slideUp(300).removeClass('active');
            $current_index = -1;
        }
        
        if (windowwidth > 647) {
            $underline.css({
                left: $(this).offset().left - $menuOffset + ($current.width()/2) - 5
            });
        }
          
      });

    $(window).on("resize", function () {

        windowwidth = $(window).width();

        $('.wwd_mi_body').slideUp(300).removeClass('active');
        if (windowwidth > 647) {
            slider();
        }else{
            $current_index = -1;
            $(".wwd_menu_item").removeClass('active');
        }

    }).resize();


}