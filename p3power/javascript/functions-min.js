jQuery(document).ready(function($){

//░░░░░░░░░░░░░░░░░░░░░░░░
//
//	 DIRECTORY
//
//	 _SlickSlider
//	 _SmoothScrolling
//	 _ExclusiveTemplate
//
//░░░░░░░░░░░░░░░░░░░░░░░░

//▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
// _SlickSlider
//▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

$('.review-wrapper').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	arrows: false,
	autoplay: false,
	responsive: [
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
			}
		}
	]
}).on('setPosition', function (event, slick) {
    slick.$slides.css('height', slick.$slideTrack.height() + 'px');
});;

$('.featured-wrapper').slick({
	centerMode: true,
	slidesToShow: 5,
	slidesToScroll: 1,
	appendArrows: $('.featured-arrows'),
	prevArrow: '<i class="fa fa-chevron-left"></i>',
	nextArrow: '<i class="fa fa-chevron-right"></i>',
	responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 500,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: false,
				dots: true,
				arrows: false
			}
		}
	]
}).on('setPosition', function (event, slick) {
    slick.$slides.css('height', slick.$slideTrack.height() + 'px');
});;;

//▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
// _SmoothScrolling
//▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

$('a[href*="#"]:not([href="#"])').click(function(e) {
	e.preventDefault();

    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);

        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top-100
            }, 1000);
            return false;
        }
    }
});

var $container = $('.download-list'),
    scroll = $container.width();

$('#download-left').hover(function() {
    $container.animate({
        'scrollLeft': -100
    },{duration: 3000, queue: false});
}, function(){
    $container.stop();
});

$('#download-right').hover(function() {
    $container.animate({
        'scrollLeft': scroll
    },{duration: 3000, queue: false});
}, function(){
    $container.stop();
});

$('#search-toggle').click(function(){
	$('body').addClass('overlay');
	$('#search-overlay').addClass('open');
});

$('.overlay-wrapper, .close-button').click(function(){
	if ( $('body').hasClass('overlay') ) {
		$('body').removeClass('overlay' );
	}

	if ( $('body').hasClass('overlay-dark') ) {
		$('body').removeClass('overlay-dark' );
	}

	if ( $('#search-overlay').hasClass('open') ) {
		$('#search-overlay').removeClass('open');
	}

	if ( $('#teamContact').hasClass('open') ) {
		$('#teamContact').removeClass('open');
	}

	$('.team-details').each(function(){
		if ( $(this).hasClass('open') ) {
			$(this).removeClass('open');
		}
	});
});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
		showArrows: true,
		maxWidth: 800,
		alwaysShowClose: true
	});
});

$('.single-team').each(function(){
	$(this).click(function(event){
		if(event.target === this || $(event.target).parent().is(this)) {
			$('body').addClass('overlay');
			$(this).find('.team-details').addClass('open');
	    }
	});
});

//▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
// _ExclusiveTemplate
//▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

if ( $('#page_template')[0] ) {

	$('#page_template option').each(function(index, option) {

		if ( option.text.indexOf('(In Use)') > -1 ) {
			option.disabled = true;
		}

	});
}

//▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
// _EmployeeSort
//▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

$('#teamWrapper .sort-top a').click(function(e){
	e.preventDefault();
	var tax = $(this).attr('data-tax');

	if ( tax == 'location' ) {
		$('.department-sort').slideUp();
		$('.location-sort').slideDown();
	} else if ( tax == 'department' ) {
		$('.location-sort').slideUp();
		$('.department-sort').slideDown();
	}

	var show = '#' + tax + '-tag-container';
	$('.team-container').children().each(function(){
		$(this).hide();
	});
	$(show).show();
});

$('#teamWrapper .location-sort input[type="checkbox"]').each(function(){
	var sortTag = $(this).attr('id');
	var sortTarget = '#' + sortTag;

	$(sortTarget).change(function(){
		if ( this.checked ) {
			$('#location-container .single-team').each(function(){
				if ( $(this).attr('data-location') == sortTag ) {
					$(this).show();
				}
			});
			var section = '#' + sortTag + '-section';
			$(section).show();
		} else {
			$('#location-container .single-team').each(function(){
				if ( $(this).attr('data-location') == sortTag ) {
					$(this).hide();

				}
			});
			var section = '#' + sortTag + '-section';
			$(section).hide();
		}
	});

});

$('#teamWrapper .department-sort input[type="checkbox"]').each(function(){
	var sortTag = $(this).attr('id');
	var sortTarget = '#' + sortTag;

	$(sortTarget).change(function(){
		if ( this.checked ) {
			$('#department-container .single-team').each(function(){
				if ( $(this).attr('data-department') == sortTag ) {
					$(this).show();
				}
			});
			var section = '#' + sortTag + '-section';
			$(section).show();
		} else {
			$('#department-container .single-team').each(function(){
				if ( $(this).attr('data-department') == sortTag ) {
					$(this).hide();

				}
			});
			var section = '#' + sortTag + '-section';
			$(section).hide();
		}
	});

});

$('#etcp').change(function() {
    if ( this.checked ) {
		$('.single-team').each(function(){
			if ( $(this).attr('data-etcp') == 'false' ) {
				$(this).addClass('hidden');
			}
		});
    } else {
		$('.single-team').each(function(){
			$(this).removeClass('hidden');
		});
	}
});

//▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
// _EmployeeContact
//▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

$('.email-toggle').click(function(e){
	e.preventDefault();

	var email = $(this).attr('data-email');
	$('#input_4_4').attr('value', email).change();

	$('#teamContact').addClass('open');

	$('.team-details').each(function(){
		if ( $(this).hasClass('open') ) {
			$(this).removeClass('open');
		}
	});
});

//▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
// _MobileMenu
//▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

$('#mobile-menu .menu > li.menu-item-has-children').click(function(e){
	if ( e.target === this || $(event.target).parent().is(this) ) {
		e.preventDefault();
		$(this).children('.sub-menu').slideToggle();
		$(this).addClass('open');
	}
});

$('#header-mobile').click(function(){
	if ( $(this).hasClass( 'open' ) ) {
		$(this).removeClass( 'open' );
		$('#mobile-menu').slideUp(400, function(){
			$('.nav-bottom').slideUp(200);
		});
	} else {
		$(this).addClass( 'open' );
		$('.nav-bottom').slideDown(200, function(){
			$('#mobile-menu').slideDown();
		});
	}
});

});
