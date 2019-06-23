<?php
	include 'dbconn.php';
	session_start();
	if(!isset($_SESSION['tender_name'])){
	$tender_name = $_GET['tender_title'];
	$_SESSION['tender_name'] = $tender_name;
	}
	else{
		if(isset($_GET['tender_title']))
		{
			if($_SESSION['tender_name'] != $_GET['tender_title'])
			{
				$_SESSION['tender_name'] = $_GET['tender_title'];
			}
		}
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['tender_name'] ?></title>
</head>
<body>

<?php
$name = $_SESSION['tender_name'];
	$query = "SELECT * FROM tender_info WHERE tender_title = '$name'";
	$result = mysqli_query($conn,$query) or die("Error in quering the database");
	echo "<div id='contents'>";
	while($row = mysqli_fetch_assoc($result)){
		print_r($row);
	}
	echo "</div>";
?>
<div id="taks">
	<form>
		<label>Enter the NO. of TASKS</label>
		<input type="number" name="task" id="task" />
		<input type="button" id="sub" value="submit" /> 
	</form>
	<div id="display">
	
	</div>
	<div id="task_input">
	<?php
		if(isset($_POST['no'])){
			$taskshere = array();
			print_r($_POST['tasks']);
			foreach ($_POST['tasks'] as $key=>$value) {
				$taskshere[] = $key;
				$query = "INSERT INTO tasklist(tender_title,task_name)VALUES('$name','$value')";
				mysqli_query($conn,$query) or die("SORRY");
			}

		}
	?>
	</div>
</div>
<script type="text/javascript" src="auto_textbox.js"></script>
</body>
</html>