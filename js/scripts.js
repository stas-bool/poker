	$(document).ready(function () {
		var audio = new Audio();
		var timer;
		var cardClicks = 0;
		var language = "both";
		var flop = [];

		const switchRu = () => {
			$('.ru').show();
			$('.en').hide();
			$('.bracket').hide();
		};

		const switchEn = () => {
			$('.ru').hide();
			$('.en').show();
			$('.bracket').hide();
		};

		const switchBoth = () => {
			$('.ru').show();
			$('.en').show();
			$('.bracket').show();
		};

		const switchLanguage = () => {
			if (language == "both") {
				switchRu();
				language = "ru";
			} else if (language == "ru") {
				switchEn();
				language = "en";
			} else if (language == "en") {
				switchBoth();
				language = "both";
			}
		};

		const compare = (a1, a2) => {
			return a1.length == a2.length && a1.every((v,i)=>v === a2[i])
		};
		const petrosyan = () => {
			//return;
			audio.src = '22.mp3';
			$('#flop').modal('show');
			audio.play();
			timer = setTimeout(function(){
				$('#flop').modal('hide');
			}, 16000);
		};

		$('.hand').click(function() {
			cardClicks++;
			if (cardClicks == 3) {
				petrosyan();
				cardClicks = 0;
			}
		});

		$('span').click(function() {
			switchLanguage();
		});

		$('#flop').on('hide.bs.modal', function () {
			audio.pause();
			clearTimeout(timer);
		});

		$('body').keydown(function(eventObject){
			var keyCode = eventObject.which;
			flop.push(keyCode);
			if (compare(flop.slice(-4), [70, 76, 79, 80]) || compare(flop.slice(-4), [65, 75, 74, 71])) {
				petrosyan();
			}
			if (keyCode == 76) {
				switchLanguage();
			}
		});
	});
