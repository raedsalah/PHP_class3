<?php
//db connection
include '../db.php';
//Adding/inserting posts into DB
print_r($_POST); //debugging
$title = $_POST['title'];
$body = $_POST['body'];
$id = $_POST['id'];
//inserting into DB
if ($conn->query("UPDATE `post` SET `title` = '$title', `body` = '$body' WHERE `post`.`id` = $id")) {
    header('location: ../');
} else {
    echo 'update failed';
}
