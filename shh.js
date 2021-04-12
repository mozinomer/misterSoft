$('.hamburger').click( function(e) {
	$(this).toggleClass('active');
	$('.listContainerLi').slideToggle();
})


$('.client-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	navText: ["<img src='./images/left.png'>","<img src='./images/right.png'>"],
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
if ($(window).width() < 992 ){
$ (".innerMenuCOntianerFOoter h6").click(function () {
    $(this).siblings('ul').slideToggle().parents().siblings().children('ul').slideUp();
    $(this).toggleClass('rotate');

});
}