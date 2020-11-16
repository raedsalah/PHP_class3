<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <h1>Strings in PHP</h1>
</body>

<?php
//counts the number of letters
$var = 'odanoijsdjioas';
echo strlen($var) . '<br>';
//counts the number of words
$var1 = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione officia nisi consequuntur dolorum veritatis. Iure mollitia, ex impedit iusto vitae consectetur facere quidem eveniet quisquam deserunt facilis quis culpa maiores! <br>';
echo str_word_count($var1) . '<br>';

//styling or case of strings
//capitalizes the whole text
echo strtoupper('dsfsdfsdfsdfsd') . '<br>';
//lower case the whole text
echo strtolower('DSFSDFSDFSDFSD') . '<br>';
//Capitalizes the first letter
echo ucfirst('dsfsdfsdfsdfsd') . '<br>';
//lower case the first letter
echo lcfirst('DSFSDFSDFSDFSD') . '<br>';


//removing Empty Spaces
//removes spaces from the start and end of a paragraph 
echo trim('  hello world  ') . '<br>';
//removes spaces from the start
echo ltrim('  hello world  ') . '<br>';
//removes spaces from the end
echo rtrim('  hello world  ') . '<br>';


//substr - help us extract letters
//substr($value, $start, $theLengthWeWantToExtract);
$var = 'hello world, from we programming class';
//      012345678---->
//                                   <----3-2-1
//letter indexing
echo substr($var, -5, 5) . '<br>';


//strpos

$email = 'contact@raedsalah.com';
echo strpos($email, '@') . '<br>';
echo 'the domain is: ' . substr($email, strpos($email, '@'));

?>


</html>