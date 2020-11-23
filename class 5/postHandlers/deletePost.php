<?php
//db connection
include '../db.php';
//Adding/inserting posts into DB
print_r($_POST); //debugging

$id = $_POST['submit'];

//inserting into DB
if ($conn->query("DELETE FROM post WHERE id = $id")) {
    echo "Post number: $id has been deleted";
} else {
    echo 'Failed to delete';
}
