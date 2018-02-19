<?php

include 'vendor/autoload.php';

// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();

foreach (new DirectoryIterator('./PIN') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    
    $locationOldFile = "PIN/".$fileInfo->getFilename();

    $pdf = $parser->parseFile($locationOldFile);
     
    $text = (string)$pdf->getText();
    
    preg_match("/([0-9]{44})/" , $text, $found);
    
    $chaveNota = (string)$found[1];
    
    $nf = substr($chaveNota, 27, 7);
    
    $newName = (string)'PIN/NF'.$nf.'PIN.pdf';
    
    rename($locationOldFile, $newName);
}



?>