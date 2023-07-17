<?php
$fileNames = $argv;
array_shift($fileNames);

$zipFileName = 'archive.zip';

$zip = new ZipArchive();

if($zip->open($zipFileName,ZipArchive::CREATE) === true){
    foreach($fileNames as $fileName){
        if(file_exists($fileName)){
            $zip->addFile($fileName);
            echo "$fileName add to zip \n";
        }else{
            echo "$fileName not found \n";
        }
        }
        $zip->close();

        echo "$zipFileName created \n";
        
    }else{
        echo "error. \n";
    }

?>
