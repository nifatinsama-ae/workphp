<?php

$filel = fopen('Nifatin.txt','r') or die("ไม่พบไฟล์ที่ต้องการ");

echo fread($filel,filesize('Nifatin.txt '));


fclose($filel);


?>