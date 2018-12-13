
/*const getChar = (event) => {
	if (event.keyCode == 108 && event.keyCode == 1076) {
		console.log("Change language");
	}
}
*/
const ru = () => {
	$('.ru').show();
	$('.en').hide();
	$('.bracket').hide();
}

const en = () => {
	$('.ru').hide();
	$('.en').show();
	$('.bracket').hide();
}

const bothLangs = () => {
	$('.ru').show();
	$('.en').show();
	$('.bracket').show();
}

$(document).ready(function () {
	var language = "both";
	$('body').keydown(function(eventObject){
		if (eventObject.which == 76) {
			if (language == "both") {
				ru();
				language = "ru";
			} else if (language == "ru") {
				en();
				language = "en";
			} else if (language == "en") {
				bothLangs();
				language = "both";
			}
		}
	});
});