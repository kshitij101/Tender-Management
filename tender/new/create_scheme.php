<?php/*
<textarea id="scheme_desc" rows="7" cols="8" maxlength="100"></textarea>
*/?>
<!DOCTYPE html>
<html>
<head>
	<title>CREATE SCHEME</title>
</head>
<body>
<form id="create_scheme" action="create_parse.php" method="POST" enctype="multipart/form-data">
	<label for="tnder_name">Scheme Name</label>
	<input type="text" name="scheme" id="tender_name" />
	<label for="scheme_code">Scheme Code</label>
	<input type="text" name="code" id="scheme_code" />
	<label for="scheme_desc">Scheme Description</label>
	<input type="textarea" name="scheme_desc" id="scheme_desc" />
	<label for="file">Choose File To Upload:</label>
	<input type="file" name="filetoupload" id="file" />
	<input type="submit" name="create" />
</form>
</body>
</html>