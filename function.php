<?php

function displayName(){
    echo "Nifatin Sama-ae";
}

echo "My Name is : ";
echo displayName();

echo "<hr color='red'>";

function addNumber($num1,$num2){
    echo $num1 + $num2;
    
}
echo addNumber(2,3);

echo "<hr color='blue'>";


function displayStudent($name1){
    echo $name1;
    
}
echo displayStudent("Nifatin");

echo "<hr color='green'>";

function powerNumber ($num,$pow){
   echo $num ** $pow;
}
echo powerNumber(10,5);

echo "<hr color='black'>";

function fractionNumber ($numerate,$denomerate){
    echo $numerate%$denomerate;
 }
 echo fractionNumber(17,9);

?>