<?php 
require_once('upload.php');
?>
<!DOCTYPE html>
<head>
    <title>RenameBulkFiles</title>
</head>
<html>
    <form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
    
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
           <input type="file" name="arquivo[]" multiple="multiple" />
           <input name="enviar" type="submit" value="Enviar">
    
    </form>    
    <a href="/rename.php">Renomear</a>
    <a href="/">Download</a>
</html>




