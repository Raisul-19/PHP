<?php

//built in function.....

$name = 'Md Raisul Islam Hridoy';
$a = 23;

echo "My name is : ".$name."<br>";
echo "The length of my name is : ".strlen($name)."<br>";
echo "The reserse of my name is : ".strrev($name)."<br>";
echo " The total word of my name : ".str_word_count($name)."<br>";
echo "To replace my name : ".str_replace('Hridoy', 'Replace', $name)."<br>";
echo "To replace my name : ".str_replace('Hridoy', $a, $name)."<br>";
echo "Substring : ".substr($name, 0, 6).'...'."<br>";

echo "<br><br>";


//  condition.....

$mark = 90;

if($mark <= 100 && $mark >= 80){
    echo "Wow, you got A+";
}
else if($mark < 80 && $mark >= 70){
    echo "Well, you got A";
}
else if($mark < 70 && $mark >= 60){
    echo "you got A-";
}
else if($mark <60 && $mark >= 0){
    echo "Yor are failed, Stupid !";
}
else{
    echo "Incomplete";
}


echo '<br><br>';

// echo ($mark >=60?'Yor are passed in the Exam':'You failed !')    // short form of if else....

// nasted condition.....

$age = 21;
$gender = 'male';

if($age >= 18){
    if($age <= 30){
        if($gender == 'Male' || $gender == 'male'){
            echo "Yes, you are perfect to do it !!!";
        }
        else{
            echo 'This is not for laidy.';
        }
    }
    else{
        echo 'You are overdated mal !';
    }
}

else{
    echo 'This is not for kid. go and study';
}


echo '<br><br>';

// switch case .......

switch($age){
    case 20:
        echo 'Yes, your current age is 20';
        break;
    case 23:
        echo 'your current age is 23';
        break;
    default:
        echo 'There is no age found';
}






echo '<br><br>';

// local time and date....

date_default_timezone_set('Asia/dhaka');

$date = date('d/m/y');
$Date = date('d/m/Y');
$DATE = date('D/M/Y');
$time = date('h:i:s A');

$DateTime = date('h:i:s a d/m/Y');


echo $date.'<br>';
echo $Date.'<br>';
echo $DATE.'<br>';
echo $time.'<br>';
echo $DateTime.'<br>';


?>