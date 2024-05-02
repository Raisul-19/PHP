<?php

// php built in function....

    $name =  "Hello Raisul Islam";
    $rplc =  "Hridoy";

    echo $name;

    echo "<br>";

    echo strlen($name);  // count the string length
    echo "<br>";

    echo str_word_count($name);   // count the sentence word
    echo "<br>";

    echo strrev($name);   // revers the sentence
    echo "<br>";

    // echo str_replace("Islam", "Hridoy", $name);  // replace the string
    // echo "<br>";

    echo str_replace("Islam", $rplc, $name);    // replace the string
    echo "<br>";


    ///////   condition ......

    $age = 32;
    $gender = "male";

    if($age >= 18){
        if($age <= 30){
            if($gender == "male"){
                echo "this game is only for a ginious like you !!!";
            }
            else{
                echo "this game is not for laidy ...";
            }

        }
        else{
            echo "You are an older person";
        }
    }
    else{
        echo "you are still a kid";
    }


    echo "<br>";
    /// tarnari operation / short form of if else...

    $a = 10;
    echo ($a>=10?"this is perfect":"this a so smale");

    echo "<br>";

    // switch case...

    $color = "green";

    switch($color){
        case "red":
            echo "the color is red";
            break;
        case "blue":
            echo "the color is blue";
            break;
        case "green":
            echo "the color is green";
            break;

        default:
            echo "there is no color match..";
    }

    echo "<br>";
    echo "<br>";

    ///// locacl time and date...

    date_default_timezone_set('asia/dhaka');
     $date = date('D-M-Y');
     $Date = date('d-m-y');
     echo $date;
     echo "<br>";
     echo $Date;

     echo "<br>";

     $time = date('h:i:s');
     $Time = date('h:i:s a');
     $tim = date('h:i:s A');
     echo $time;
     echo "<br>";
     echo $Time;
     echo "<br>";
     echo $tim;
     echo "<br>";

     $td = date('h:i:s a d-m-Y');
     echo $td;



?>