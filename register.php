<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");
	
	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Велком</title>
</head>
<body>
    
	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Войти в аккаунт</h2>
			<p>
				<?php echo $account->getError(Constants::$loginFailed); ?>
				<label for="loginUsername">Имя пользователя</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="напр. Pisyun" required>
			</p>
			<p>
				<label for="loginPassword">Пароль</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Ваш пароль" required>
			</p>

			<button type="submit" name="loginButton">ВОЙТИ</button>
			
		</form>




		<form id="registerForm" action="register.php" method="POST">
			<h2>Зарегестрироваться бесплатно</h2>
			<p>
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<?php echo $account->getError(Constants::$usernameTaken); ?>
				<label for="username">Имя пользователя</label>
				<input id="username" name="username" type="text" placeholder="напр. Pisyun" value="<?php getInputValue('username') ?>" required>
			</p>

			<p>
				<?php echo $account->getError(Constants::$firstNameCharacters); ?>
				<label for="firstName">Имя</label>
				<input id="firstName" name="firstName" type="text" placeholder="напр. Иван" value="<?php getInputValue('firstName') ?>" required>
			</p>

			<p>
				<?php echo $account->getError(Constants::$lastNameCharacters); ?>
				<label for="lastName">Фамилия</label>
				<input id="lastName" name="lastName" type="text" placeholder="напр. Петров" value="<?php getInputValue('lastName') ?>" required>
			</p>

			<p>
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<?php echo $account->getError(Constants::$emailTaken); ?>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="напр. pisyun@gmail.com" value="<?php getInputValue('email') ?>" required>
			</p>

			<p>
				<label for="email2">Подтвердить email</label>
				<input id="email2" name="email2" type="email" placeholder="напр. pisyun@gmail.com" value="<?php getInputValue('email2') ?>" required>
			</p>

			<p>
				<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="password">Пароль</label>
				<input id="password" name="password" type="password" placeholder="Ваш пароль" required>
			</p>

			<p>
				<label for="password2">Подтвердить пароль</label>
				<input id="password2" name="password2" type="password" placeholder="Ваш пароль" required>
			</p>

			<button type="submit" name="registerButton">ЗАРЕГИСТРИРОВАТЬСЯ</button>
			
		</form>
	</div>

</body>
</html>