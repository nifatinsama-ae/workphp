<?php
    $length = $_GET['legend'];
    $width = $_GET['width'];
    $aren = $length * $width;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หาพื้นที่สีเหลี่ยมผืนผ้า</title>
</head>
<body>
    <p style="color: red;">
    <?php
   
    echo "ความยาว เท่ากับ ".$length."<br>";
    echo "ความกว้าง เท่ากับ ".$width."<br>";
    echo "พื้นที่สีเหลี่ยมผืนผ้า เท่ากับ".$aren."<br>";
?>
    </p>

</body>
</html>