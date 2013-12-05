<!DOCTYPE html>
<html>
<head>
	<title>animations</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/animations.css">
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
</head>

<body>
	<div id="stage">
		<img id="goody-girl" class="animate hover click-fly" src="images/goody-girl.png" alt="goody girl" />
		<img id="monsieur-le-box" class="animate hop click-jump" src="images/monsieur-le-box.png" alt="monsieur-le-box" />
		<img id="letterbox-face" class="animate hop click-flip" src="images/letterbox-face.png" alt="letterbox-face" />
		<!-- <img id="mr-punnet" class="animate hop-flip" src="images/mr-punnet.png" alt="mr-punnet" /> -->
	</div>

	<script>
		var hover = $(".click-fly");
		hover.click(function () {
	    	$(this).addClass('fly');
	    	$(this).one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
	    	    function(e) {
	    	    	$(this).removeClass('fly');
	    	    });
		});

		var hop = $(".click-jump");
		hop.click(function () {
	    	$(this).addClass('jump');
	    	$(this).one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
	    	    function(e) {
	    	    	$(this).removeClass('jump');
	    	    });
		});

		var hopflip = $(".click-flip");
		hopflip.click(function () {
	    	$(this).addClass('flip');
	    	$(this).one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
	    	    function(e) {
	    	    	$(this).removeClass('flip');
	    	    });
		});
	</script>
</body>
</html>
