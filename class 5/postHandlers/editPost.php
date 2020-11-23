<?php
print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>

<body>
    <h1>Edit Post</h1>
    <form action="updatePost.php" method="post">
        <input type="text" name="title" placeholder="Title" value="<?php echo $_POST['title'] ?>"> <br>
        <textarea name="body" cols="30" rows="10" placeholder="Type in something interesting!"><?php echo $_POST['body'] ?></textarea><br>
        <input type="hidden" name="id" value="<?php echo $_POST['submit'] ?>">
        <button type="submit">Edit</button><br>
    </form>
</body>

</html>