<?php

// variable declreation 

$a = "Hridoy";
$b = 15;
$c = 10;

$d = $a." birth on ".$b."-".$c;  //concatination....


// function  ......
function hridoy(){
    $name = "Md Raisul Islam";
    $age = "23";
    $id = "201-15-14119";
    $mark1 = 85;
    $mark2 = 90;
    $total = $mark1+$mark2;
    $avrg = $total/2;

    echo "Name : ".$name."<br>";
    echo "Age : ".$age."<br>";
    echo "Id : ".$id."<br>";
    echo "Mark-1 : ".$mark1."<br>";
    echo "Mark-2 : ".$mark2."<br>";
    echo "Total Mark : ".$total."<br>";
    echo "Avarage Mark : ".$avrg."<br><br><br>";
}
function sajib(){
    $name = "Md Sajib Ahmed";
    $age = "22";
    $id = "202-15-14391";
    $mark1 = 88;
    $mark2 = 92;
    $total = $mark1+$mark2;
    $avrg = $total/2;

    echo "Name : ".$name."<br>";
    echo "Age : ".$age."<br>";
    echo "Id : ".$id."<br>";
    echo "Mark-1 : ".$mark1."<br>";
    echo "Mark-2 : ".$mark2."<br>";
    echo "Total Mark : ".$total."<br>";
    echo "Avarage Mark : ".$avrg."<br><br><br>";
}

hridoy();  // call to the function....
sajib();


// argument passing funtion....
function add($x, $y, $z){
    $ad = $x+$y+$z;

    echo "The sum of the three number are : ".$x.' + '.$y.' + '.$z.' = '.$ad.'<br>';
}

add(15, 20, 25);   // the value in the brakets are argument...
add(5, 2, 7);
add(100, 200, 300);



// global variable declearation in the function...
function glb(){
    global $a;
    global $b;
    global $c;
    global $d;

    echo '<br>'.$d.'<br><br>';
}

glb();


// constant variable declreation....

define('pi', 3.1416);   // under the define function is always constant...
echo "The value of PI is constant : ".pi.'<br><br>';

$r = 5;
$R = 2*pi*$r*$r;
echo "The area of the circle is".$R.'<br><br>';






?>