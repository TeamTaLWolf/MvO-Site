<!DOCTYPE html>
<?php
$bg = "white.png";
?>
<html>
<head>
	<style type="text/css">
	body {
		background-image: url('<?php echo $bg;?>');
	}
	</style>
    <title>Marcel van Oijen</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script type="jquery.simple-text-rotator.js"></script>
	<link rel="stylesheet" type="text/css" href="simpletextrotator.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link href="https://fonts.googleapis.com/css?family=Chelsea+Market|Fanwood+Text|Fredericka+the+Great" rel="stylesheet">
</head>
<body>
<div id="body">
<div id="scrolldiv">
	<div id="banner_div"></div>
		<img src="banner.png">
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<h1>Welkom!</h1>
<p>Dit is de site van Marcel van Oijen. De site wordt nog steeds gemaakt. Kom later nog eens terug!</p>
<span class="rotate">Contractenlezer, Marcel van Oijen</span>
</div>
<script type="text/javascript">
    	$(".rotate").textrotator({
			animation: "flipUp", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
			separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
			speed: 2000 // How many milliseconds until the next word show.
		});
</script>
</body>
</html>
