<?php
//CRUD = CREATE READ UPDATE DELETE
//create connection to DB
$conn = mysqli_connect('localhost', 'root', '', 'webprog');
//displayed error id connection has failed
if (mysqli_connect_errno()) {
    die('Error 500: failed to establish connection');
} else {
    //echo 'connected successfully <br>';
}
