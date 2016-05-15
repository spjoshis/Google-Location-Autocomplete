# Google-Location-Autocomplete
Google location autocomplete fetches locations from google map and set autosuggestion to control of web page.

Google maps JavaScript API is great library to get location dropdown suggestion. Assume, you are developing project in which you want to add location auto suggestion for site user. Its look like impossible to manage locations of all over the world. Here, Google maps API makes it pretty thing.



<b>Add JQuery and google location API in html file</b>

`<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>`



<b>Add input control named `location`.</b>

`<input type="text" name="location" id="location" autofocus="" />`



<b>Initialise Autocomplete function with control</b>

`
	$(document).ready(function () {
		var _control = $('input[name="location"]')[0];
		return new google.maps.places.Autocomplete(_control, {
			types: ["geocode"]
		});
	});
`

Tutorial: http://sgeek.org/locations-using-google-maps-api

If you have any queries regarding implementation email me on gopal@sgeek.org
