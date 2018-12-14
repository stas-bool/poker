<?php

?>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script
	    src="https://code.jquery.com/jquery-3.3.1.slim.js"
	    integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
	    crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Poker Combinations</title>
</head>
<body>
	<div class="wraper">
		<div class="row">
			<div class="combination"></div>
			<div class="combination">
				<img src="images/combinations/png/royal-flush_shadow_min.svg.png" class="hand">
				<span class="ru">РОЯЛ СТРИТ ФЛЕШ</span><span class="bracket"> (</span><span class="en">ROYAL FLUSH<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/png/straight-flush_shadow_min.svg.png" class="hand">
				<span class="ru">СТРИТ ФЛЕШ</span><span class="bracket"> (</span><span class="en">STRAIGHT FLUSH<span class="bracket">)</span></span>
			</div>
			<div class="combination"></div>
		</div><br>

		<div class="row">
			<div class="combination">
				<img src="images/combinations/png/four-of-a-kind_shadow_min.svg.png" class="hand">
				<span class="ru">КАРЕ</span><span class="bracket"> (</span><span class="en">FOUR OF A KAIND<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/png/full-house_shadow_min.svg.png" class="hand">
				<span class="ru">ФУЛЛ ХАУС</span><span class="bracket"> (</span><span class="en">FULL HOUSE<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/png/flush_shadow_min.svg.png" class="hand">
				<span class="ru">ФЛЕШ</span><span class="bracket"> (</span><span class="en">ROYAL FLUSH<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/png/straight_shadow_min.svg.png" class="hand">
				<span class="ru">СТРИТ</span><span class="bracket"> (</span><span class="en">STRAIGHT<span class="bracket">)</span></span>
			</div>
		</div><br>
		
		<div class="row">
			<div class="combination">
				<img src="images/combinations/png/three-of-a-kind_shadow_min.svg.png" class="hand">
				<span class="ru">ТРОЙКА/СЕТ</span><span class="bracket"> (</span><span class="en">THREE OF A KIND<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/png/two-pairs_shadow_min.svg.png" class="hand">
				<span class="ru">ДВЕ ПАРЫ</span><span class="bracket"> (</span><span class="en">TWO PAIRS<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/png/one-pair_shadow_min.svg.png" class="hand">
				<span class="ru">ПАРА</span><span class="bracket"> (</span><span class="en">PAIR<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/png/high-hand_shadow_min.svg.png" class="hand">
				<span class="ru">СТАРШАЯ КАРТА</span><span class="bracket"> (</span><span class="en">HIGH HAND<span class="bracket">)</span></span>
			</div>
		</div>
	</div>
	<div id="flop" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	    	<img id="petrosyan" src="images/petrosyan.gif">
	    </div>
	  </div>
	</div>
</body>
<script type="text/javascript">
	var audio = new Audio();
	var timer;
	var cardClicks = 0;
	const switchRu = () => {
		$('.ru').show();
		$('.en').hide();
		$('.bracket').hide();
	}

	const switchEn = () => {
		$('.ru').hide();
		$('.en').show();
		$('.bracket').hide();
	}

	const switchBoth = () => {
		$('.ru').show();
		$('.en').show();
		$('.bracket').show();
	}

	const compare = (a1, a2) => {
	    return a1.length == a2.length && a1.every((v,i)=>v === a2[i])
	}
	const petrosyan = () => {
	  audio.src = '22.mp3';
	  $('#flop').modal('show');
	  audio.play();
	  timer = setTimeout(function(){
	  	$('#flop').modal('hide');
	  }, 16000);
	}

	$('.hand').click(function() {
		cardClicks++;
		if (cardClicks == 3) {
			petrosyan();
			cardClicks = 0;
		}
	})

	$('#flop').on('hide.bs.modal', function () {
	  audio.pause();
	  clearTimeout(timer);
	})

	var language = "both";
	var flop = [];
	$(document).ready(function () {
		$('body').keydown(function(eventObject){
			var keyCode = eventObject.which;
			flop.push(keyCode);
			if (compare(flop.slice(-4), [70, 76, 79, 80]) || compare(flop.slice(-4), [65, 75, 74, 71])) {
				petrosyan();
			}
			if (keyCode == 76) {
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
			}
		});
	});
</script>
</html>