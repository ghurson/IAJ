/**
 * PRIMARY THEME JAVASCRIPT FILE
 *
 * This is your public-facing, front-end Javascript. It compiles to assets/js/app.min.js in your theme directory.
 *
 * This is used to initialize your custom Javascript. If you would like to change how Foundation and it's plugins are
 * initialized, you can. See http://foundation.zurb.com/docs/javascript.html for documentation.
 */
(function($){

    // Foundation JavaScript
    $(document).foundation('topbar', {
        sticky_class: 'snap-to-top'
    });

    //Your code goes here

    $(document).ready(function(){

        $(".iaj_gallery_thumb").fancybox();

        $(".wpcf7-list-item:first-child label").addClass("selected");
        $(".wpcf7-list-item label").each(function(){
            $(this).click(function(){
                $(".wpcf7-list-item label").each(function(){
                    $(this).removeClass("selected");
                });
                $(this).addClass("selected");
            });
        });
        $(".wpcf7-radio .wpcf7-list-item:first-child > label").click(function(){
            $(".personal").addClass("super_show").show();
            $(".business").removeClass("super_show").hide();
        });
        $(".wpcf7-radio .wpcf7-list-item:last-child > label").click(function(){
            $(".personal").removeClass("super_show").hide();
            $(".business").addClass("super_show").show();
        });
        $("#sidebar a").each(function(){
            $(this).hover(function(){
                $(this).animate({color: '#FECB00'});
            },function(){
                $(this).animate({color: '#ffffff'})
            });
        });
    });

})(jQuery);