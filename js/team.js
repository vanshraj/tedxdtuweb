//onload functions
    function codeAddress() {
            var nb= document.querySelector('.navbar');
            nb.className += " nav-fade";
        }
    window.onload = codeAddress;

    $('a[href^="#"]').click(function(){

var the_id = $(this).attr("href");

    $('html, body').animate({
        scrollTop:$(the_id).offset().top
    }, 'slow');

    return false;});

//login signup 

$('.new_account').click(function(){
    $('.mobile_no').css('display','inline');
    $('.sign-in').css('display','inline-block');
    $('.new_account').css('display','none');
    $('.loginmodal-container h1').text('SignUp With Your Social Account');
});
$('.sign-in').click(function(){
    $('.mobile_no').css('display','none');
    $('.sign-in').css('display','none');
    $('.new_account').css('display','inline-block');
    $('.loginmodal-container h1').text('Login to Your Account');
});




//collaapse menu on click anywhere
$(document).click(function(e) {
    if (!$(e.target).is('a')) {
        $('.collapse').removeClass('navbar-bg-add');
        $('.collapse').collapse('hide');        
    }
});
