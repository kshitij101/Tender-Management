<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>create tender</title>
</head>

<body>
	<form method="POST" action="tender_insert.php">
		<div name="orgnamediv">
		<label for="orgname">Organisation Name</label>
		<input type="text" name="orgname">
		</div>
		<div name="orgtypediv">
		<label for="orgtype">Organisation Type</label>
		<select name="orgtype">
			<?php
				require 'dbconn.php';
				$query = "SELECT ministry_name FROM ministry_list";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_object($result))
				{
					echo "<option value='".$row->ministry_name."'>".$row->ministry_name."</option>";
				}
			?>
		</select>
		</div>
		<div name="tendernamediv">
			<label for="tendername">Tender Title
			</label>
			<input type="text" name="tendername" placeholder="Tender Title">
		</div>
		<div name="prodcatdiv">
			<label for="prodcat">
				Product Category
			</label>
			<input type="text" name="prodcat">
		</div>
		<div name="prodsubcatdiv">
			<label for="prodsubcat">
				Product SubCategory
			</label>
			<input type="text" name="prodsubcat">
		</div>
		<div name="tendervaluediv">
			<label for="tendervalue">Tender Value
			</label>
			<input type="number" name="tendervalue" placeholder="In INR">
			<label for="EMD">EMD</label>
			<input type="number" name="emd">
		</div>
		<div name="tendertype">
			
		</div>
		<div name="tenderlocationdiv">
		<label for="tenderlocation">Location</label>
		<input type="text" id="tenderlocation" name="tenderlocation" onclick="getLocation()">
		<label for="state">State:</label>
		<input type="text" name="state">
			<script>
				var x = document.getElementByname("tenderlocation");
				var pr = document.getElementByname("tr");
				function getLocation() {
				if (navigator.geolocation) {
        			navigator.geolocation.getCurrentPosition(showPosition);
    				} else { 
        				x.innerHTML = "Geolocation is not supported by this browser.";
    				}
				}
				
				function showPosition(position) {
    				var loc  = position.coords.latitude + "," + position.coords.longitude;
					var request = new XMLHttpRequest();
					request.open('GET',"locget.php?loc="+loc,true);
					request.onload = function(){
								x.setAttribute("value",request.responseText);
								pr.innerHTML = request.responseText;
					}
					request.send();	
				}
				</script>
		</div>
		<div name="advdatediv">
			<label for="advdate">Publication Date</label>
			<input type="date" name="advdate">
			<label for="advtime">At:</label>
			<input type="time" name="advtime">
		</div>
		<div name="subdatediv">
			<label for="advdate">Last date for submission</label>
			<input type="date" name="subdate">
			<label for="advtime">At:</label>
			<input type="time" name="subtime">
		</div>
		<div name="tenderdescdiv">
			<label for="tenderdesc">
				Work Description
			</label>
			<input type="texatarea" name="tenderdesc" maxlength='100' />
			<div name="sectordiv">
				<label for="sector">Sector
				<input type="text" name="sector" />
				</label>
			</div>
		</div>
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>