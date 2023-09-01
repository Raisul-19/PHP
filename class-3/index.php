<?php

// Built in function ..

$x = "Bangladesh";
$l = strlen($x);   // strlent  count charecter and the space also

echo "The lenth of the string : ".$l."<br><br>";
echo strrev($x)."<br>";   // revers function use for revers a string...
echo substr($x,0,3)."..."."<br>"; /// see the sub string from a sentence or paragraph...


$word = "Hello, my name is md raisul islam hridoy. And am a student of Daffodil Internationa Universty.";

echo "<br>Total word of the sentence :".str_word_count($word)."<br>";

$n = "Hello Raisul<br>";
$r = "Raisul Islam<br>";
echo str_replace('Raisul', 'Hridoy', $n);   ////replace by direct a word ..
echo str_replace("Raisul", $r, $n)."<br><br>";         /// replace by declread variavble...




// conditon

$a = 30;
$b = 30;

if($a > $b){
    echo "A is grater than B <br>";

}
else if($a < $b){
    echo "A is smaller than B <br>";
}
else if($a == $b){
    echo "A and B are equal <br>";
}



// nasted condition...

echo "<br><br>";


$age = 22;

// if($age >= 18 && $age <= 30){
//     echo "yes you can";              //  (((double conditon)))
// }
// else{
//     echo "you can not do this";
// }

if($age >= 18){
    if($age <=30){
        echo "Yesss, you can play the game !";
    }                                                       //  nested conditon....
    else{
        echo "you are a bura beta !";
    }
}
else{
    echo "you are drink milk !";
}



echo "<br><br>";

$boys = 22;
$gender = "male";
if($boys >=18){
    if($boys <=25){
        if($gender == "Male" || $gender == "male"){
            echo "yess, yor are perfect to play !";
        }
        else{
            echo "this is not for girl. only boys can";
        }
    }
    else{
        echo "this is not for bura beta";
    }
}
else{
    echo "this not for kid !";
}

echo "<br><br>";

$sort = 18;
echo ($sort>=18?'yor are a man':'you are a kid');


echo "<br><br>";

// switch/case operation...

$color = 'red';

switch($color){
    case 'green':
        echo "the color is green<br>";
        break;

    case 'red':
        echo "the color is red";
        break;

    default:
        echo 'no color found';
        break;
        
}


echo '<br><br>';


// local time and date....

date_default_timezone_set('Asia/dhaka');

$date = date('d/m/y');    //01/09/23    
$DATE = date('D/M/Y');   //Fri/Sep/2023
$time = date('h:i:s A');   // 08:10:55 PM

$td = date('h:i:s a d/m/Y');  //08:10:55 pm 01/09/2023

echo $date.'<br>';
echo $DATE.'<br>';
echo $time.'<br>';
echo $td.'<br>';






?>