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
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

    <title>Poker Combinations</title>
</head>
<body>
	<div class="wraper">
		<div class="row">
			<div class="combination"></div>
			<div class="combination">
				<img src="images/combinations/royal-flush.png" class="hand">
				<span class="ru">РОЯЛ СТРИТ ФЛЕШ</span><span class="bracket"> (</span><span class="en">ROYAL FLUSH<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/straight-flush.png" class="hand">
				<span class="ru">СТРИТ ФЛЕШ</span><span class="bracket"> (</span><span class="en">STRAIGHT FLUSH<span class="bracket">)</span></span>
			</div>
			<div class="combination"></div>
		</div><br>

		<div class="row">
			<div class="combination">
				<img src="images/combinations/four-of-a-kind.png" class="hand">
				<span class="ru">КАРЕ</span><span class="bracket"> (</span><span class="en">FOUR OF A KAIND<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/full-house.png" class="hand">
				<span class="ru">ФУЛЛ ХАУС</span><span class="bracket"> (</span><span class="en">FULL HOUSE<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/flush.png" class="hand">
				<span class="ru">ФЛЕШ</span><span class="bracket"> (</span><span class="en">ROYAL FLUSH<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/straight.png" class="hand">
				<span class="ru">СТРИТ</span><span class="bracket"> (</span><span class="en">STRAIGHT<span class="bracket">)</span></span>
			</div>
		</div><br>
		
		<div class="row">
			<div class="combination">
				<img src="images/combinations/three-of-a-kind.png" class="hand">
				<span class="ru">ТРОЙКА/СЕТ</span><span class="bracket"> (</span><span class="en">THREE OF A KIND<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/two-pairs.png" class="hand">
				<span class="ru">ДВЕ ПАРЫ</span><span class="bracket"> (</span><span class="en">TWO PAIRS<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/one-pair.png" class="hand">
				<span class="ru">ПАРА</span><span class="bracket"> (</span><span class="en">PAIR<span class="bracket">)</span></span>
			</div>
			<div class="combination">
				<img src="images/combinations/high-hand.png" class="hand">
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
</html>