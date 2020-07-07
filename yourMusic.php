<?php
include("includes/includedFiles.php");
?>

<div class="playlistsContainer">
	
	<div class="gridViewContainer">
		<h2>ПЛЕЙЛИСТЫ</h2>

		<div class="buttonItems">
			<button class="button green" onclick="createPlaylist()">НОВЫЙ ПЛЕЙЛИСТ</button>
		</div>



		<?php
			$username = $userLoggedIn->getUsername();

			$playlistsQuery = mysqli_query($con, "SELECT * FROM playlists WHERE owner='$username'");

			if(mysqli_num_rows($playlistsQuery) == 0) {
				echo "<span class='noResults'>У вас еще нет плейлистов.</span>";
			}

			while($row = mysqli_fetch_array($playlistsQuery)) {

				echo "<div class='gridViewItem'>

						<div class='playlistImage'>
							<img src='assets/images/icons/playlist.png'>
						</div>
						
						<div class='gridViewInfo'>"
							. $row['name'] .
						"</div>

					</div>";



			}
		?>








	
	</div>

</div>