$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $('.navbar').addClass('shrink');
        $('.navbar-brand').addClass('shrink');
        $('.navbar-collapse').addClass('shrink');
		$('.about').addClass('shrink');
		$('.about2').addClass('shrink');
    } else {
        $('.navbar').removeClass('shrink');
        $('.navbar-brand').removeClass('shrink');
        $('.navbar-collapse').removeClass('shrink');
		$('.about').removeClass('shrink');
		$('.about2').removeClass('shrink');
		
    }
});
$(document).ready(function () {
    var bt = $('#mainmenu').position().top;
	var $container = $('#aboutme');
    $(window).scroll(function () {
        var wst = $(window).scrollTop();

        (wst >= bt) ?
        $('#mainmenu').css({ position: 'fixed', top: 60 + 'px' }) :
        $('#mainmenu').css({ position: 'absolute', top: bt + 'px' })
    });
	
    
    $('#loginLink').on('mouseover', function () {
        $container.stop(true).fadeIn(400);
    }).on('mouseleave', function () {
        $container.stop(true).delay(300).fadeOut(200);
    });
	
    $container.on('mouseenter', function () {
        $(this).stop(true).clearQueue().show();
    }).on('mouseleave', function () {
        $(this).delay(200).fadeOut(100);
    });
});