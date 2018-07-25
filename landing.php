<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>My Local Childcare</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/childcare.css" rel="stylesheet">
</head>

<body>
	<div class="landing-page">
		<div id="login-wrapper">
			<form class="form login-form" action="loader.php">
				<legend><img src="img/mylocallogo.png"></legend>
				<div class="body">
					<form>
						<input type="text" style="text-transform:uppercase" required="" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" value="" name="postalcodes_pattern16" id="postalcodes_pattern16" list="postalcodes_pattern16_datalist">
						<datalist id="postalcodes_pattern16_datalist"> </datalist>
						<p>
							<select>
								<option value="5">5 Miles</option>
								<option value="10">10 Miles</option>
								<option value="25">25 Miles</option>
								<option value="50">50 Miles</option>
							</select>
						</p>
						<p>Enter your postcode to find local childcare</p>
				</div>
				<div class="login-footer">
					<button type="submit" class="btn btn-success">SEARCH</button>
				</div>
				</form>
		</div>
	</div>
	</div>
</body>

</html>