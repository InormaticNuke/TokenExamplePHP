<?php

function functionName(){
    //ExampleCode
}

function MSG(){
    echo "<h1>TestMessage</h1>";
}

MSG();

function showNames($name,$lastName,$age){
    echo "My name is: ".$name." ".$lastName." and my age is ".$age." years old."."<br>";
}

showNames("Manuel","Rengifo",21);
showNames("Juan","Perez",18);
showNames("Cosme","Fulanito",42);
showNames("Dickson","Soto",25);
showNames("David","Martinez",21);

echo "<br><br>";

function setHeight($minHeight = 140){
    echo "The height is: ".$minHeight."<br>";
}

setHeight();
setHeight(180);

echo "<br><br>";


function add($num1,$num2){
    $total1 = $num1 + $num2;

    return $total1;
}

function multi($num3,$num4){
    $total2 = $num3 * $num4;

    return $total2;
}

function div($num5,$num6){
    if ($num6 != 0){
        $total3 = $num5 / $num6;

        return $total3;
    }

    else{
        echo "Error, you can't divide by zero"."<br>";
    }
}


echo "The numbers added: ".add(10,10)."<br>";
echo "The numbers multiplied: ".multi(10,10)."<br>";
echo "The numbers divided: ".div(10,10)."<br>";

?>