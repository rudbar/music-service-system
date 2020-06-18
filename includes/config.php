<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Yekaterinburg");

	$con = mysqli_connect("localhost", "root", "", "rudie_ythub");

	if(mysqli_connect_errno()) {
		echo "Ошибка при подключении: " . mysqli_connect_errno();
	}




?>