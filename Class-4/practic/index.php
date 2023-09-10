<?php

// for-loop... 

for($i=0;$i<=10;$i++){
    if($i%2==0){
        echo $i." is even"."<br>";
    }
    else{
        echo $i.' is odd'.'<br>';
    }
};

// prim number identify.. 

function checkPrime($num){
    if($num == 1)
    return 0; 
    for($i=2; $i <= $num/2; $i++){

        if($num % $i == 0)
        return 0;
    };
    return 1;
};

echo 'The prime numbers between 1 - 100 are : ';
for($num = 1; $num <=100; $num++){
    $flag = checkPrime($num);
    if($flag == 1){
        echo $num." , ";
    }
};

echo "<br><br>";

//  নামতা ১ থেকে ২০ পর্যন্ত

for($m = 1; $m <= 20; $m++){
    echo $m." er Namta : <br><br>";
    for($n = 1; $n <=10; $n++){
        $k = $m * $n;
        echo $m.' x '.$n.' = '.$k."<br>";
    }
    echo "<br>";
}


// while loop... 

$w = 20;
while($w>=0){
    echo $w." , ";
    $w = $w-2;
}

echo "<br>";
// do while loop.. 

$d = 10;
do{
    echo $d." , ";
    $d= $d+10;
}
while($d<=100);
echo "<br>";


// array... 

$arr1 = array(10,20,30,'Raisul', 19.50, true, "Hridoy");
// echo $arr1;  ;; here eco not support for array

print_r($arr1);    // this is print only index and value.. 
echo "<br><br>";

var_dump($arr1);    // this is print index, value and variable type.. 
echo "<br><br>";

foreach($arr1 as $sValue){   // this is for print all single items.. 
    echo $sValue.'<br>';
}


//  associative array ... 

$cars = array('tsl'=>'Tesla, 321', 555, 'Hridoy',12.022, 5=>'this is a number', true);  // this is assign into a fixed index or name.. 
print_r($cars);
echo "<br><br>";

print_r($cars['tsl']);
echo "<br><br>";

print_r($cars[5]);
echo "<br><br>";



// multidimantional array.. 

$var = array(
    'diu'=>array('Daffodil', 'Ashulia', 'Savar'),
    'ewu'=>array('EastWest', 'Rampura', 'Mohakhali'),
    'du'=>array('Dhaka', 'nilkhet', 'Dhaka')

);

foreach($var as $edu){    // all item view at a time.. 
    foreach($edu as $bd){
        echo $bd.'<br>';
    }
}

echo "<br><br>";

foreach($var['diu'] as $varsity){
    echo $varsity.'<br>';
}







?>