<?php

if(isset($_POST['create_comment']))
{
    $comment_author = $_POST['comment_author'];
    $comment_author_description = $_POST['comment_author_description'];
    $comment_email = $_POST['comment_email'];
    $comment_text = $_POST['comment_text'];
    $comment_date = $_POST['comment_date'];
    
    $query = "INSERT INTO comments(comment_author,comment_author_description, comment_email, comment_text , comment_date, comment_status ) ";
    $query .= "VALUES ('{$comment_author}','{$comment_author_description}' , '{$comment_email}' , '{$comment_text}', '{$comment_date}', 'unapproved')";

    $create_comment_query = mysqli_query($connection, $query);
    if(!$create_comment_query)
    {
        die("query failed" . mysqli_error($connection));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="well">
<form action="" method ="post" role ="form">

    <div class="form-group">
    <label for="Author">Author</label><br>
    <input type="text" class="form-control" name="comment_author"><br>
    </div>

    <div class="form-group">
    <label for="Author">Author description</label><br>
    <input type="text" class="form-control" name="comment_author_description"><br>
    </div>

    <div class="form-group"><br>
    <label for="Author">Email</label><br>
    <input type="email" class="form-control" name="comment_email">
    </div>

    <div class="form-group"><br>
    <label for="Author">Comment</label><br>
    <textarea name="comment_text" class="form-control" id="" rows="3"></textarea>
    </div>

    <div class="form-group">
    <label for="Author">Date</label><br>
    <input type="text" class="form-control" name="comment_date"><br>
    </div>

    <div>
    <input class="btn btn-primary" type="submit" name="create_comment" value="Publish">
    </div>
</form>
</div>
    
</body>
</html>