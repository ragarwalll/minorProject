var data;
$(document).ready(function() {
    $(".index a").click(function() {
        //Do stuff when clicked      
        data= $(this).attr("data");
        $('html,body').animate({
            scrollTop: $("."+data).offset().top},
            'slow');
    }); 

    $(".top-scroll").click(function() {
        $('html,body').animate({
            scrollTop: $(".top").offset().top},
        'slow');
    });
});
