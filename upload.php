<?php 

$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

for ($i = 0; $i < count($arquivo['name']); $i++){
    
   $destino = "PIN/".$arquivo['name'][$i];

    if (move_uploaded_file($arquivo['tmp_name'][$i], $destino)) {
        header('Location: index.php');
    }else{
        echo "Algo deu errado!";
    }
}
	
	
?>