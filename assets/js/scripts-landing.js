	$(document).ready(function() {
		if ( $('.alert-danger').is(":visible") ) {
		$('.alert-danger').fadeIn(1000, function() {
            $('.alert-danger').delay(5000).fadeOut(1000, function() {
                $('.alert-danger').delay(1000).css('display','none');
            });
        });
	}
	});
	
	if (msg !="") {
        $('#flash-message').fadeIn(1000, function() {
            $('#flash-message').delay(7000).fadeOut(1000, function() {
                $('#flash-message').delay(1000).css('display','none');
            });
        });
	}

	// Countdown initializer
	var now = new Date();
	var countTo = ("2014/06/12 14:00:00")   
	$('.timer').countdown(countTo, function(event) {
		$(this).find('.days').text(event.offset.totalDays);
		$(this).find('.hours').text(event.offset.hours);
		$(this).find('.minutes').text(event.offset.minutes);
		$(this).find('.seconds').text(event.offset.seconds);
	});
