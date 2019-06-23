<?php
	include 'dbconn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CREATE</title>
</head>
<body>
<form>
	<label>Enter the NO. of TASKS</label>
	<input type="number" name="task" id="task" />
	<input type="button" id="submit" value="submit" /> 
</form>
<div id="display">
	
</div>
<div id="task_input">
	<?php
		if(isset($_GET['no'])){
			$tasks = array();
			foreach ($_GET['tasks'] as $key) {
				$tasks[] = $key;
			}

		}
	?>
	</div>
<script type="text/javascript" src="auto_textbox.js"></script>
</body>
</html>