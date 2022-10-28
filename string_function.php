<?php
//นับว่ามีตัวอักษรทั้งหมดกี่ตัว
    $name = "Nifatin Sama-ae";
    echo strlen($name);
//นับว่าตัวอักษรมีทั้งหมดกี่คำ
    echo "<br>";
    $word = "I LOVE U";
    echo str_word_count($word);
    echo "<br>";
//อ่านชื่อกลับด้าน
    echo "<br>";
    echo strrev($name);
 //หาตำแหน่งของตัวอักษร
    echo "<br>";
    echo strpos($word,"U");
//หาคำว่าLOVEเปลี่ยนเป็นคำว่าHATE
    echo "<br>";
    echo str_replace($word,"LOVE","HATE");
    echo "<br>";
    $wie = str_replace("LOVE","HATE",$word);
     echo $wie;
     echo "<br>";
     echo strtolower($name);
     echo "<br>";
     echo strtoupper($word);

?>