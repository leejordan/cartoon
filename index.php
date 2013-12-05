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
		<img class="hover" src="images/goody-girl.png" alt="goody girl" />
		<img class="hop" src="images/monsieur-le-box.png" alt="monsieur-le-box" />
		<img class="hop-flip" src="images/monsieur-le-box.png" alt="monsieur-le-box" />
	</div>

	<script>
		var hover = $(".hover");
		hover.click(function () {
	    	$(this).addClass('fly');
	    	$(this).one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
	    	    function(e) {
	    	    	$(this).removeClass('fly');
	    	    });
		});

		var hop = $(".hop");
		hop.click(function () {
	    	$(this).addClass('jump');
	    	$(this).one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
	    	    function(e) {
	    	    	$(this).removeClass('jump');
	    	    });
		});

		var hopflip = $(".hop-flip");
		hopflip.click(function () {
	    	$(this).addClass('jump-flip');
	    	$(this).one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
	    	    function(e) {
	    	    	$(this).removeClass('jump-flip');
	    	    });
		});
	</script>
</body>
</html>
