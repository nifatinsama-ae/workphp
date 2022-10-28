<?php
    $whiteside = $_GET['whiteside'];
    $leftside = $_GET['leftside'];
    $high = $_GET['height'];
    $fold = 0.5 ;
    $scor = $whiteside + $leftside;

     $aren = $fold* $high * $scor

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หาพื้นที่สีเหลี่ยมผืนผ้า</title>
<form style=" border: dotted 5px #68D811;
        padding: 5px;
        display: inline-block;
        ">
   <h4 style="color:aqua"><?php echo "ความยาวด้านขวา เท่ากับ ".$whiteside?> </h4> 
   <h4 style="color:#F2CD36"><?php echo "ความยาวด้านซ้าย เท่ากับ ".$leftside ?></h4>
   <h4 style="color:#DB36F2"><?php echo "ความสูง เท่ากับ ".$high ?> </h4> 
   <h4 style="color:#FF3333"><?php echo"พื้นที่รูปสี่เหลี่ยมคางหมู เท่ากับ ".$aren?> </h4>
</form>

   
    
</head>
<body>
  

</body>
</html>