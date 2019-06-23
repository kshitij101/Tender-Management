<?php
	include 'dbconn.php';
	print_r($_POST);
	$scheme_name = $_POST['scheme'];
	$scheme_code = $_POST['code'];
	$scheme_desc = $_POST['scheme_desc'];
	$target_dir = "uploads/";
	$target_file = $target_dir.basename($_FILES["filetoupload"]["name"]);
	$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$uploadOk = 1;
	if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
	}
if($FileType != "docx" && $FileType != "doc" && $FileType != "xlsx"
&& $FileType != "pdf" ) {
    echo "Sorry, only PDF,DOCX,XLSX&DOC files are allowed.";
    $uploadOk = 0;
    
	}	
	echo $uploadOk;
	$query = "INSERT INTO scheme_info(scheme_code,scheme_name,scheme_desc,file_dir)VALUES('$scheme_code','$scheme_name','$scheme_desc','$target_file')";
	if($result = mysqli_query($conn,$query)){
		echo 'inserted';
	}
	else{
		echo 'not inserted';
	}
?>