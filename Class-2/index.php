<?php

    // $dekhao = "Hello Dear";
    // $number = 10;

    // $word1 = "Hero";
    // $word2 = "Alom";

    // echo $dekhao;
    // echo $number;

    // echo $word1.$word;     //concatination using . ( add more then one string)
    // echo $word1." ".$word2; 
    // echo 'faisal is '.$word1.' '.$word2.' fan';

    // $x = 10;
    // $y = 5;
    // $z = $x+$y;

    // echo $x+$y;
    // echo $z;
    // $a = 10;
    // $b = 3;

    // echo $a++;  // post increament
    // echo "<br>";
    // echo ++$a;   // pre increament

    // echo $a--;  // post decreament
    // echo "<br>";
    // echo --$a;   // pre decreament
    
    // echo $a%$b;  // modulas 

    //  function

    // function sum(){
    //     $x = 10;
    //     $y = 5;
    //     $z = $x+$y;
    //     echo $z;
    // }
    // sum();

    // function add($a, $b){
    //     echo $a+$b."<br>";
    // }
    // add(10, 20);
    // add(15, 5);
    // add(200, 2);
    // add(100, 20);
    // add(50, 30);

    // constant variable declear..

    // define('pi', 3.1416);  // constant

    // echo pi;



    // function abc(){
    //     $x = "hello";

    // }
    // abc()
    // echo $x;  // not seen , because x is a local variable.

    // global variable

    $g = "Global variable";
    function glb(){
        global $g;   // g is decleard as a global variable.
        echo $g;
    }
    glb();


?>