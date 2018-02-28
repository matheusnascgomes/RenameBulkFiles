<?php 
require_once('upload.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>RenameBulkFiles</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav class="menu">
		    <div class=" container nav-wrapper">
				<a href="#" class="brand-logo ">RenameBulkFiles</a>
				<div class="right">
					<a class="btn" href="/rename.php">Renomar</a>	
					<a class="btn" href="/download.php">Download</a>	
				</div>
		    </div>
		    
	  	</nav>
	</header>

	<content>

		<div class="form container">

		<form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
			<div class="file-field input-field">
			<div class="btn">
				<span>File</span>
				<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
				<input type="file" name="arquivo[]" multiple="multiple" />
			</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text"> 
				</div>
			</div>
			<input class="btn" type="submit" value="Enviar" />
		</form>

		</div>

	</content>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>




