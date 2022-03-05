<?php

    $dosyaIsmi= $_GET['dosyaIsmi'];
    $dosya = fopen($dosyaIsmi,'r');
   
    echo fgets($dosya); 
    fclose($dosya);


?>