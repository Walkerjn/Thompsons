$(function () {
	$('form[name="contactform"]').submit(function (event) {
		var name = $('form[name="contactform"] input[name="name"]').val();
		var email = $('form[name="contactform"] input[name="email"]').val();
		var enquiry = $('form[name="contactform"] textarea[name="enquiry"]').val();
		var ok = true;
		event.preventDefault();

		if (name == '') {
			$('#required-name').fadeIn("slow");

			ok = false;

		} else {

			$('#required-name').fadeOut("slow");

		}

		$("#name").change(function () {
			$('#required-name').fadeOut("slow");
		});


		if (email == '') {
			$('#required-e-mail').fadeIn("slow");

			ok = false;

		} else {

			$('#required-e-mail').fadeOut("slow");

		}
		$("#email").change(function () {
			$('#required-e-mail').fadeOut("slow");
		});


		if (enquiry == '') {
			$('#required-enquiry').fadeIn("slow");

			ok = false;

		} else {

			$('#required-enquiry').fadeOut("slow");

		}

		$("#enquiry").change(function () {
			$('#required-enquiry').fadeOut("slow");
		});


		if (ok == true) {

			$.ajax({
				type: 'post',
				url: 'send_form_email.php',
				data: $('form').serialize(),
				success: function () {
					$("#myModal").modal('show');
					$("#contactform")[0].reset();
				}

			});
		}
	});
});