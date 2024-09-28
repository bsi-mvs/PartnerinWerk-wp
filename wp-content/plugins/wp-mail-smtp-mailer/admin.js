jQuery(document).ready( function($){

	$('.encrypt').change( function(){

		if ( $(this).is(':checked') ){

			$(this).val('1');

		}else{

			var r = confirm('No encryption ?');
			if( r == true ){
				$(this).val('0');
			}
			
		}

	});



	if ( $('.encrypt').is(':checked') ){

		if ( $('.host').val() != ''){

			$('[name="host"]').prop('disabled', true);
			$('[name="port"]').prop('disabled', true);
			$('[name="username"]').prop('disabled', true);
			$('[name="password"]').prop('disabled', true);
			$('[name="encrypt"]').prop('disabled', true);
			$('[name="SMTPSecure"]').prop('disabled', true);
			$('[name="FromName"]').prop('disabled', true);
			$('[name="From"]').prop('disabled', true);

		}
	}

	$('#resetVal').click( function(){
		$('[name="host"]').prop('disabled', false);
		$('[name="port"]').prop('disabled', false);
		$('[name="username"]').prop('disabled', false);
		$('[name="password"]').prop('disabled', false);
		$('[name="encrypt"]').prop('disabled', false);
		$('[name="SMTPSecure"]').prop('disabled', false);
		$('[name="FromName"]').prop('disabled', false);
		$('[name="From"]').prop('disabled', false);

		$('input[type=text]').val('');
		$('input[type=email]').val('');
		$('input[type=number]').val('');
		$('input[type=password]').val('');

	});


	$('#testEmail').click( function(){

		$('.testEmail-wrap').show();
		$('html,body').animate({
        scrollTop: $(".testEmail-wrap").offset().top},
        'slow');

	});

	
	
	$('input').change( function(){ 

		wpmsm_change_data();
	});
	
	$('input').click( function(){ 

		wpmsm_change_data();
	});

	function wpmsm_change_data(){
		var host = $('[name="host"]').val();
		var from = $('[name="username"]').val();
		$('.host-info').html('');

		if ( host == 'smtp.gmail.com' ) {

			$('.host-info').html("Please go to <a href='https://security.google.com/settings/security/apppasswords'\
				target='_blank'>Google Account</a> then enable two step verification and create app password.");

			$('select option[value=tls]').attr('selected','selected');
			$('[name="port"]').val('587');

		} else if ( host.indexOf('smtp.mail.yahoo') >= 0 ) {

			$('.host-info').html("Please go to <a href='https://login.yahoo.com/account/security?ctx=upsellcpw'\
				target='_blank'> Yahoo Account</a> then enable two step verification and create app password.");

			$('select option[value=ssl]').attr('selected','selected');
			$('[name="port"]').val('465');

		}else if (  host == 'smtp.live.com' ) {

			$('.host-info').html("Please go to <a href='http://go.microsoft.com/fwlink/p/?LinkID=263779'\
				target='_blank'> your account</a> and create app password.");

			$('select option[value=tls]').attr('selected','selected');
			$('[name="port"]').val('587');

		}else if (  host == 'smtp.office365.com' ) {

			$('.host-info').html("Please go to <a href='http://windows.microsoft.com/en-us/windows/app-passwords-two-step-verification'\
				target='_blank'> your account</a> and create app password.");

			$('select option[value=tls]').attr('selected','selected');
			$('[name="port"]').val('587');

		}else{
			// if( from.indexOf('@') <= 0 ){
			// 	from = 'info@'+wpmsm.domain_name;
			// }
			from = $('[name="From"]').val();
		}

		$('[name="From"]').val( from );
	}
	var msg = 'Example: info@'+wpmsm.domain_name;
	if( wpmsm.domain_name === 'localhost' ){
		msg = 'You installed on localhost. Please add valid domain name.'
	}
	$('.from-eg').text( msg );


});