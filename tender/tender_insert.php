<?php
	include 'dbconn.php';
	$orgname = $_POST['orgname'];
	$orgtype = $_POST['orgtype'];
	$tendername = $_POST['tendername'];
	$prodcat = $_POST['prodcat'];
	$prodsubcat = $_POST['prodsubcat'];
	$tendervalue = $_POST['tendervalue'];
	$emd = $_POST['emd'];
	$tenderlocation = $_POST['tenderlocation'];
	$state = $_POST['state'];
	$tenderdesc = $_POST['tenderdesc'];
	$sector = $_POST['sector'];
	$query = "INSERT INTO tender_info(organisation_name,organisation_type,tender_title,product_category,product_subcategory,tender_value,emd,location,state,work_description,sector)VALUES('$orgname','$orgtype','$tendername','$prodcat','$prodsubcat','$tendervalue','$emd','$tenderlocation','$state','$tenderdesc','$sector')";
	if(($result=mysqli_query($conn,$query))){
		echo 'done';
	}else{
		echo 'not done';
	}
?>	