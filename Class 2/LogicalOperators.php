<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>

<body>
    <h1>Logical Operators</h1>
    <?php

    //single line comment
    /*
    Multiple line comment
    */

    //if else statement - comparing 3 values 

    function biggerThan($a, $b, $c)
    {
        if ($a > $b) {
            if ($a > $c) {
                echo 'A is the biggest number the value of A is ' . $a;
            } else {
                echo 'C is the biggest number the value of C is ' . $c;
            }
        } else if ($b > $a) {
            if ($b > $a) { //TRUE
                if ($b > $c) {
                    echo 'B is the biggest number the value of B is ' . $b;
                } else {
                    echo 'C is the biggest number the value of C is ' . $c;
                }
            }
        }
    }

    //biggerThan(1, 500, 101);


    //Switch statement - printer the day name
    function WhatDayOfTheWeek($WeekDayNo)
    {
        switch ($WeekDayNo) {
            case 1:
                echo 'Monday';
                break;
            case 2:
                echo 'Tuesday';
                break;
            case 3:
                echo 'Wednesday';
                break;
            case 4:
                echo 'Thursday';
                break;
            case 5:
                echo 'Friday';
                break;
            case 6:
                echo 'Saturday';
                break;
            case 7:
                echo 'Sunday';
                break;

            default:
                echo '<h3>error: wrong day number</h3>';
                break;
        }
    }

    WhatDayOfTheWeek(4)

    ?>
    <h1>this is the last html element</h1>
</body>

</html>