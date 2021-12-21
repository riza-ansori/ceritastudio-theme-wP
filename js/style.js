$(document).ready(function(){
    $(".menu-btn").click(function(e){
        e.preventDefault();
        $("span").toggleClass("span-clicked");
        $(".wrap-full-menu").toggleClass("menu-expand");
    });
    // btn scroll
    var scroll_start = 0;
    var startchange = $('#to-top');
    if (startchange.length){
        $(document).scroll(function() { 
            scroll_start = $(this).scrollTop();
            if(scroll_start > 100) {
                $(startchange).css('opacity', '1');
            } else {
                $(startchange).css('opacity', '0');
            }
        });
    }
    
    $("#to-top").on("click", function() {
        $(window).scrollTop(0);
    });
});