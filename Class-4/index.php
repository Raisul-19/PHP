<?php

// for loop... 

// for($i=0;$i<=10;$i++){
//     echo 'Hridoy'.$i.'<br>';
// }
// for($j=100;$j>=0;$j=$j-5){
//     echo $j.'<br>';
// }

// even / odd finding by for loop.. 

// for($i=1;$i<=100;$i++){
//     if($i%2==0){
//         echo $i.' :- Even'.'<br>';
//     }
//     else{
//         echo $i.' :- Odd'.'<br>';
//     }
// }

// nasted for loop ... 

// for($i=1;$i<=10;$i++){
//     for($j=1;$j<=10;$j++){
//         $k = $i*$j;

//         echo $i.' x '.$j.' = '.$k.'<br>';
//     }
//     echo "<br>";
// }

// while loop... 

// $x = 0;
// while($x<=21){
//     echo $x.'<br>';
//     $x = $x+3;
// }

// $y = 10;
// while($y>=0){
//     echo $y.'<br>';
//     $y--;
// }


// do while loop.. 

// $a = 0;
// do{
//     echo $a.'<br>';
//     $a++;                      
// }
// while($a<=5);


// Array ..

$numbers = array(10,20,'Hridoy',TRUE,50.50);    

print_r($numbers);     // print with index number... 
echo '<br>';
var_dump($numbers);    // print with data type ... 
echo '<br>';

foreach($numbers as $value){     // to print every value in single
    echo $value.'<br>';
}

echo $numbers[0];     // to print only a single value by its index number
echo '<br>';

// assosiative array... 

$car = array('tesla'=>'Tesla',223, 'Black');
echo $car['tesla'].'<br>';

print_r($car);




?>