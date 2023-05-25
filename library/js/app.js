jQuery(document).ready(function($) {
	var windowWidth = $(window).width()

/* ====================== MOBILE NAV ======================  */
    $('.menu-toggle').on("click", function() {
        $(this).toggleClass('active');
        $('header nav').toggleClass('open');
    })

    if(windowWidth < 1024) {
	    $('#menu-main-menu .menu-item-has-children').on("click", function() {
	       $(this).toggleClass('expanded');
	       $(this).find('.sub-menu').slideToggle();
	    })
	}

/* ====================== Clients Slider ======================  */
	 $('.clients-slider .clients').slick({
	 	dots: true,
	 	arrows: false,
	 	infinite: true,
	 	slidesToShow: 4,
	 	speed: 300,
	 	autoplay: true,
	 	autoplaySpeed: 5000
	 });


	/* ====================== Testimonials Slider ======================  */
	 $('.testimonial-slider .testimonials').slick({
		dots: true,
		arrows: false,
		infinite: true,
		centerMode: true,
		slidesToShow: 1,
		centerPadding: '40px',
		speed: 300,
		//autoplay: true,
		autoplaySpeed: 5000,
		responsive: [
			{
				breakpoint: 1400,
				settings: {
					centerPadding: '240px'
				}
			},
			{
				breakpoint: 991,
				settings: {
					centerPadding: '60px'
				}
			},
			{
				breakpoint: 768,
				settings: {
					centerPadding: '40px'
				}
			}
		]
	});
})
