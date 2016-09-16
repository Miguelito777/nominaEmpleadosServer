<?php
	
	if (isset($_POST["loginUser"])) {
		$login = json_decode($_POST["loginUser"], true);
		echo "2";
	}
?>