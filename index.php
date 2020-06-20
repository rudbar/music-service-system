<?php 
include("includes/config.php");

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Велком</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    

	<div id="nowPlayingBarContainer">
		
		<div id="nowPlayingBar">
			
			<div id="nowPlayingLeft">
				
			</div>

			<div id="nowPlayingCenter">
				

				<div class="content playerControls">
					
					<div class="buttons">

						<button class="controlButton shuffle" title="Кнопка перемешать музыку">
							<img src="assets/images/icons/shuffle.png" alt="Перемешать">
						</button>

						<button class="controlButton previous" title="Кнопка предидущая песня">
							<img src="assets/images/icons/previous.png" alt="Предидущая">
						</button>

						<button class="controlButton play" title="Кнопка начать играть">
							<img src="assets/images/icons/play.png" alt="Начать">
						</button>

						<button class="controlButton pause" title="Кнопка остановить музыку" style="display: none;">
							<img src="assets/images/icons/pause.png" alt="Остановить">
						</button>

						<button class="controlButton next" title="Кнопка Следующая песня">
							<img src="assets/images/icons/next.png" alt="Следующая">
						</button>

						<button class="controlButton repeat" title="Кнопка повторять песню">
							<img src="assets/images/icons/repeat.png" alt="Повторять">
						</button>
						
					</div>


					<div class="playbackBar">
						
						<span class="progressTime current">0.00</span>

						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>
							</div>
						</div>

						<span class="progressTime remaining">0.00</span>


					</div>



				</div>


			</div>

			<div id="nowPlayingRight">
				
			</div>






		</div>

	</div>


</body>
</html>