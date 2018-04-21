<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<meta charset="utf-8" >
	<title>Persective Buttons</title>
	<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
	<div class="pb-group" >
		<?php for($i = 0; $i < 5; $i++) { ?>
			<button class="pb-button">Teste <?=$i?></button>
		<?php }  ?>
	</div>
</body>
</html>