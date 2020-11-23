<?php
//db connection
include '../db.php';
//Adding/inserting posts into DB
print_r($_POST); //debugging
$title = $_POST['title'];
$body = $_POST['body'];
//inserting into DB
if ($conn->query("INSERT INTO `post` (`id`, `title`, `body`) VALUES (NULL, '$title', '$body')
")) {
    echo 'Data inserted';
} else {
    echo 'data insertion failed';
}
