<?php



$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์ที่ได้</title>
    <style>
        h1{
            text-align: center;
            font-size: 120px; 
            color: #6633FF;
        }
        p{
            text-align: center;
            font-size: 40px; 
        }
        div{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 500px;
            background: #EEF0EA;
            border-radius: 10px;

        }
        h4{
            text-align: center;
            font-size: 40px; 
        }
        body{
            background: linear-gradient(120deg, #BA55D3, #3dccdf);
            height: 100vh;
        }
    </style>
</head>
<body>
<div>
     <p>ผลลัพธ์ที่ได้</p>
    <h1 >
   
<?php
switch ($op){
    case '+':
        function addNumber($num1,$num2){
            echo  $num1 + $num2;
            }
           addNumber($num1,$num2);
        break;
    case '-':
        function minusNumber($num1,$num2){
            echo  $num1 - $num2;
            }
             minusNumber($num1,$num2);
        break;
    case 'x':
        function multipleNumber($num1,$num2){
            echo  $num1 * $num2;
            }
             multipleNumber($num1,$num2);
        break;
        case '/':
            function divideNumber($num1,$num2){
                echo  $num1 / $num2;
                }
                 divideNumber($num1,$num2);
            break;
            case 'xX':
            function exponentiationNumber($num1,$num2){
                echo  $num1 ** $num2;
                }
                exponentiationNumber($num1,$num2);   
                break;
    default:
    function modNumber($num1,$num2){
        echo  $num1 % $num2;
        }
        modNumber($num1,$num2);
        break;
        
}

?>




</body>
</html>
