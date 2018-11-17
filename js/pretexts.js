$('.main-form').hide();
$('.name-alert').hide();
$('.age-alert').hide();
var myVar;
myVar = setTimeout(showPage, 1200);
function showPage() {
    $('.main-form').fadeIn();
    $(".center").fadeOut();
}