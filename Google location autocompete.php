<html>
	<head>
		<title>Google location autosuggestion</title>
	</head>
	<body>
		<form method="post">
			<div>
				<input type="text" name="location" id="location" autofocus="" />
			</div>
			<div style="margin-top: 10px;">
				<button id="btnSubmit">Submit</button>
			</div>
		</form>
		<br/>
		<div>
			<?php
				if(isset($_POST['location'])){
					echo "<b>Location:</b>";
					echo $_POST['location'];
				}
			?>
		</div>
		<script src="js/jquery-1.10.0.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
		<script>
			$(document).ready(function () {
				var _control = $('input[name="location"]')[0];
				return new google.maps.places.Autocomplete(_control, {
					types: ["geocode"]
				});
			});
		</script>
	</body>
</html>