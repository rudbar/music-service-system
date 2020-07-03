<?php
include("includes/includedFiles.php");

if(isset($_GET['term'])) {
	$term = urldecode($_GET['term']);
}
else {
	$term = "";
}
?>

<div class="searchContainer">

	<h4>Поиск исполнителя, альбома или песни</h4>
	<input type="text" class="searchInput" value="<?php echo $term; ?>" placeholder="Начните печатать...">
	
</div>