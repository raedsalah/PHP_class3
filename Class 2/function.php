<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Hello World</h1>

    <?php
    $printThis = 'Hello World-1 <br>';
    printValue();

    echo $printThis;
    function printValue()
    {
        $printThis = 'Hello World-2 <br>';
        echo $printThis;
    }

    ?>
</body>

</html>