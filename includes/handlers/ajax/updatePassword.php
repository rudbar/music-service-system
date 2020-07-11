<?php
include("../../config.php");

if(!isset($_POST['username'])) {
	echo "ОШИБКА: Не удалось получить username";
	exit();
}

if(!isset($_POST['oldPassword']) || !isset($_POST['newPassword1']) || !isset($_POST['newPassword2'])) {
	echo "Не все пароли были изменены";
	exit();
}

if($_POST['oldPassword'] == "" || $_POST['newPassword1'] == "" || $_POST['newPassword2'] == "") {
	echo "Пожалуйста, заполните все поля";
	exit();
}

$username = $_POST['username'];
$oldPassword = $_POST['oldPassword'];
$newPassword1 = $_POST['newPassword1'];
$newPassword2 = $_POST['newPassword2'];

$oldMd5 = md5($oldPassword);

$passwordCheck = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$oldMd5'");
if(mysqli_num_rows($passwordCheck) != 1) {
	echo "Неверный пароль";
	exit();
}

if($newPassword1 != $newPassword2) {
	echo "Ваши новые пароли не совпадают";
	exit();
}

if(preg_match('/[^A-Za-z0-9]/', $newPassword1)) {
	echo "Ваш пароль должен содержать только буквы латинского алфавита и/или цифры";
	exit();
}

if(strlen($newPassword1) > 30 || strlen($newPassword1) < 5) {
	echo "Ваше имя пользователя должно содержать от 5 до 30 символов";
	exit();
}

$newMd5 = md5($newPassword1);

$query = mysqli_query($con, "UPDATE users SET password='$newMd5' WHERE username='$username'");
echo "Данные успешно обновлены";

?>