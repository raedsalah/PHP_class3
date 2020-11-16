<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <h1>Loops</h1>
    <h3>While Loop</h3>
    <?php
    // while loop
    $count = 1;
    while ($count <= 5) {
        echo $count . "<br>";
        ++$count;
    }
    ?>

    <h3>Do While Loop</h3>
    <?php
    // while loop
    $count = 1;
    do {
        echo $count . "<br>";
        ++$count;
    } while ($count <= 5);
    ?>

    <h3>Do While Loop</h3>
    <?php
    // For Loop
    for ($count = 1; $count <= 5; $count++) {
        echo $count . "<br>";
    }
    ?>

    <h3>Do While Loop</h3>
    <?php
    // Foreach loop - Next Week + arrays
    foreach ($variable as $key => $value) {
        # code...
    }
    ?>
</body>

</html>