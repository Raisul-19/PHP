<?php

    // for loop .....

    for($i=1; $i<=10; $i++){
        echo $i.'<br>';
    }

    echo '<br>';


    for($j=1; $j<100; $j=$j+12){
        echo $j.'<br>';
    }

    echo '<br>';

    for($i=10; $i>=1; $i--){
        echo $i.'<br>';
    }


    // even odd finding ....

    for($e=1;$e<=100;$e++){
        if($e%2==0){
            echo $e.' is Even.'.'<br>';
        }
        else{
            echo $e.' is Odd'.'<br>';
        }
    }


    //// times table // namta ......

    for($i=1; $i<=20; $i++){
        for($j=1; $j<=10; $j++){
            echo $i.' x '.$j.' = '.$i*$j.'<br>';
        }
        echo '--------------------------'.'<br>';
    }





    /// while loop .........

    $a = 30;
    while($a>=20){
        echo $a.'<br>';
        // $a = $a+2;
        $a--;
    }





    //// do while loop ......

    $d = 1;
    do{
        echo $d.'<br>';
        $d++;
    }
    while($d<=10);



    ////  array .....

    $num = array(1, 2, 'Raisul', 4.302, 5);
    print_r($num);

    echo '<br>';
    
    var_dump($num);

    echo '<br>';
    echo $num[2];

    echo '<br>';
    echo '<br>';


    //// associative array ....

    $cars = array('name'=>'BMW', 1234, 'white', 19=>'hridoy', 'sadfsf', 'erujhh', 5=>'dfgdgh', 'ewrt');
    print_r($cars);

    echo '<br>';

    echo $cars['name'];
    echo '<br>';

    echo $cars[19];
    echo '<br>';

    echo '<br>';
    echo '<br>';


    // // multi-dimantional array ....

    $tk = array(
            array(10, 20, 30),
            array(40, 50, 60),
            array(70, 80, 90)
        );

    foreach($tk as $taka){
        foreach($taka as $money){
            echo $money.'<br>';
        }
    }


    $khabar = array(
                'fruits' => array('amm', 'jaam', 'lichu', 'kola'),
                'foods' => array('burger', 'pizza', 'pasta', 'noodles'),
                'drinks' => array('mojo', 'RC', 'sprite', 'milk')
        );

    foreach($khabar['fruits'] as $yammy){
        echo $yammy.'<br>';
    }

    // // foreach loop .....

    foreach($num as $data){
        echo $data.'<br>';    /// to print all array value single by single
    }


?>