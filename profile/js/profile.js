$('#view_profile').click(function(){
	$('.profile').slideToggle("slow", "linear");
	$('.reset').slideUp("slow", "linear");
});
$('#view_reset').click(function(){
	$('.reset').slideToggle("slow", "linear");
	$('.profile').slideUp("slow", "linear");
});