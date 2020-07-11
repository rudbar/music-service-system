<?php
include("../../config.php");

if(!isset($_POST['username'])) {
	echo "ОШИБКА: Не удалось получить username";
	exit();
}

if(isset($_POST['email']) && $_POST['email'] != "") {

	$username = $_POST['username'];
	$email = $_POST['email'];

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Email введен неправильно";
		exit();
	}

	$emailCheck = mysqli_query($con, "SELECT email FROM users WHERE email='$email' AND username != '$username'");
	if(mysqli_num_rows($emailCheck) > 0) {
		echo "Email уже занят";
		exit();
	}

	$updateQuery = mysqli_query($con, "UPDATE users SET email = '$email' WHERE username='$username'");
	echo "Обновлено!";

}
else {
	echo "Вы должны ввести email";
}


?>