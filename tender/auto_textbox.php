<?php
	include 'dbconn.php';
	$num = $_REQUEST['num'];
	$i = 1;?>
	<form action="tender.php" method="GET">
	<input type="hidden" name="no" />
	<?php
	while($i <= $num){
		echo "<div><input type='text' name='tasks[]' /></div>";
		$i++;
	}
	?>
	<input type="submit" name="submit" />
	</form>
	<?php
?>