<?php
	$hour = time() + 3600 * 24 * 30;
	setcookie('avviso', 'si', $hour);
	echo "ok";
?>