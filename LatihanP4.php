<?php 
    $nilai = 100;
    if($nilai >= 80 && $nilai <= 100){
        echo "A";
    }elseif($nilai > 70 && $nilai < 79){
        echo "B";
    }elseif($nilai > 60 && $nilai < 69){
        echo "c";
    }elseif($nilai > 50 && $nilai < 59){
        echo "D";
    }elseif($nilai <= 50){
        echo "E";
    }else{
        echo "Input Invalid";
    }
    
?>