<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For each loop</title>
</head>

<body>
    <h1>Foreach loop</h1>

    <?php
    //Arrays
    $arrayCars = array('BMW', 'Lambo', 'Chevy', 'cady', 'dodge', 'nissan');
    //                  0       1       2       3        4


    //normal string
    $car = 'BMW';

    //echo $arrayCars[1] . '<br>';
    //echo $arrayCars[0] . '<br>';

    //Associative Arrays
    $arrayCars2 = array('car1' => 'BMW', 'car2' => 'Lambo', 'car3' => 'Chevy');

    //echo $arrayCars2['car3'] . '<br>';

    //for loop
    for ($i = 0; $i < count($arrayCars); $i++) {
        //echo $arrayCars[$i] . '<br>';
    }

    //Foreach loop
    foreach ($arrayCars as $car) {
        echo $car . "<br>";
    }

    ?>

    /*
    Multidimensional array visual example
    =====================================

    2 dimensional array
    value1 | value2 | value3 | value4 | value5
    value1.1 | value2.1 | value3.1 | value4.1 | value5.1
    value1.2 | value2.2 | value3.2 | value4.2 | value5.1
    value1.3 | value2.3 | value3.3 | value4.3 | value5.3


    Multidimensional array
    value1 | value2 | value3 | value4 | value5
    value1.1 => value1.1.2|value1.2.1 | value2.1 | value3.1 | value4.1 | value5.1
    value1.2 | value2.2 | value3.2 | value4.2 | value5.1
    value1.3 | value2.3 | value3.3 | value4.3 | value5.3

    */



</body>

</html>