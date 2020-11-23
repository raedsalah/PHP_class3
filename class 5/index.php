<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL CONN</title>
</head>

<body>
    <h1>Database & PHP</h1>
    <form action="postHandlers/createPost.php" method="post">
        <input type="text" name="title" placeholder="Title"> <br>
        <textarea name="body" cols="30" rows="10" placeholder="Type in something interesting!"></textarea><br>
        <button type="submit" name='submit'>Post</button><br>
    </form>
    <h1>Forum</h1>

    <?php
    include 'db.php';

    $result = $conn->query('select * from post');
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo $row['title'] . ': ' . $row['body'] . ' <form action="postHandlers/deletePost.php" method="post">
            <button type="submit" name="submit" value="' . $row['id'] . '">Delete</button>
        </form>
        <form action="postHandlers/editPost.php" method="post">
            <input type="hidden" name="title" value="' . $row['title'] . '">
            <input type="hidden" name="body" value="' . $row['body'] . '">
            <button type="submit" name="submit" value="' . $row['id'] . '">Edit</button>
        </form>
        <hr>';
        }
    } else {
        echo 'failed to fetch data';
    }

    ?>
</body>

</html>