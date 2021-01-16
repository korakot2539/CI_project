<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<?php foreach ($products as $product) { ?>			
		<li> <?php echo $product->PRODUCT_ID ?> . <?= $product->PRODUCR_NAME ?> </li>
		<?php } ?>

	</ul>
</body>
</html>