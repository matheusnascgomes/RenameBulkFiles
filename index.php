<html>
<body>
    
    <form>
        <input type="file" multiple name="pin[]"/>

        <input type="submit" value="Renomear"/>
    </form>
    
<?php
   # Declarar a variável "i", que será nosso controle, para que não haja
   # loop infinito.
   $i = 0;
  
   # Faz um loop conforme o número de arquivos
   foreach ($_FILES["pin"]["error"] as $key => $error) {
  
     # Definir a pasta que os arquivos serão "upados".
     $pasta = "PIN/_" . $_FILES["pin"]["name"][$i];
  
     # Aqui, você faz o upload do arquivo, utilizando a classe que você
     # tem aí.
     $ftp->upload($_FILES["pin"]["tmp_name"][$i], $pasta);
  
     # Agora o arquivo já foi upado, pode fazer alguns scripts adicionais, como por exemplo
     # adicionar o nome dele no banco de dados, ou talvez alertar o nome de cada arquivo.
  
     # Incrementar algum um valor a mais na variável "i" para que não ocorra loop infinito.
     ++$i;
   }
?>
</body>
</html>