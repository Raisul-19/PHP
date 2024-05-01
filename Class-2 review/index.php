<?php 

    // variable declaration

    // $word1 = "hello there";
    // $word2 = "my name is Md Raisul Islam";
    // $number = 123;
    

    // // echo $word;
    // // echo $number;
    // echo $word1.' '.$word2." and I am a profesional web developer";

    $x = 10;
    $y = 20;

    // echo $x+$y;
    $z = $x+$y;

    echo $z;
    echo "<br><br>";

    // increament and dereament

    $i = 5;

    // echo $i++;   // post-increment
    // echo "<br>";
    echo ++$i;   // pre-increment

    // echo "<br>";
    


    // echo $i--;   // post-decrement
    echo "<br>";
    // echo --$i;   // pre-decrement


    // function.....

    function raisul(){
        echo "Raisul, focus on your career !!!".'<br>';
    }

    raisul();
    raisul();
    raisul();

    echo "<br>";
    echo "<br>";

    function add($a, $b){
        // $c = $a + $b;
        // echo $a.' + '.$b.' = '.$c.'<br>';
        echo $a.' + '.$b.' = '.$a+$b.'<br>';
    }
    add(10, 20);
    add(20, 20);
    add(30, 20);
    add(20, 20);


    echo "<br>";
    echo "<br>";
    // constrant variable

    define('pi', 3.1416);
    echo pi;

    echo "<br>";
    echo "<br>";

    // local variable   and   global variable

    $glo =  "global variable 1";
    $glo2 =  "global variable 2";

    function abc(){
        $x = "hello Raisul".'<br>';
        echo $x;    // local varable only use in the function...

        global $glo, $glo2;
        
        echo $glo.' '.$glo2;


    }
     abc();



?>