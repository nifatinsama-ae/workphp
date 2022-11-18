<?php

$numply  = $_GET['num'];

echo "สูตรคูณแม่ <br>";
for($num = 1; $num <= 12; $num++){
    echo "$numply x ".$num." = ".($num*$numply );
    echo "<br>";
    echo "<meta http-equiv='refresh' content='5; url=multiple.html'>";
}

?>