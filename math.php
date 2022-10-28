<?php

    echo pi();
    echo "<br>";
    echo pi()*2*2;
    echo "<br>";
    $score = array(10,20,30,40,15,22,33,44,55);
    //หาค่าน้อยสุด
    echo min($score); 
    echo "<br>";
      //หาค่ามากสุด
    echo max($score); 
    echo "<br>";
    
    $ss = -22;
    //ตัดเครื่องหมายลบออก
    echo abs($ss);
    echo "<br>";

//หารากที่2(squarroot)ของค่าที่เราอยากหา
    echo sqrt(144);
    echo "<br>";
//ปัดเสทขึ้น/ลง
echo round(1.55);
echo "<br>";
//สุ่่มเลข
echo rand(1,16)



?>