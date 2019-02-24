<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Author</th>
            <th>Email</th>
            <th>Content</th>
            <th>Date</th>
            <th>Status</th>
            <th>Approved</th>
            <th>Unapproved</th>
            <th>Delete</th>
            
        </tr>
    </thead>
    <tbody>

    <?php
    $query="SELECT * FROM comments";
    $select_comments = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_comments))
    {
        $comment_id = $row['comment_id'];
        $comment_author = $row['comment_author'];
        $comment_email = $row['comment_email'];
        $comment_content = $row['comment_content'];
        $comment_date = $row['comment_date'];
        $comment_status = $row['comment_status'];
        

        echo "<tr>";
        echo "<td>$comment_id</td>";
        echo "<td>$comment_author</td>";
        echo "<td>$comment_email</td>";
        echo "<td>$comment_content</td>";
        echo "<td>$comment_date</td>";
        echo "<td>$comment_status</td>";


        echo "<td><a href='comments.php?approve=$comment_id'>Approved</a></td>";

        echo "<td><a href='comments.php?unapprove=$comment_id'>Unapproved</a></td>";

        echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
</tbody>
</table>


<?php
if(isset($_GET['approve']))
{
    $the_comment_id = $_GET['approve'];

    $query= "UPDATE comments SET comment_status = 'approved'  WHERE comment_id =  $the_comment_id ";
    $approve_comment_query= mysqli_query($connection, $query);
    header("Location: comments.php");
}

if(isset($_GET['unapprove']))
{
    $the_comment_id = $_GET['unapprove'];

    $query= "UPDATE comments SET comment_status = 'unapproved'  WHERE comment_id =  $the_comment_id ";
    $unapprove_comment_query= mysqli_query($connection, $query);
    header("Location: comments.php");
}

if(isset($_GET['delete']))
{
    $the_comment_id = $_GET['delete'];
    $query= "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
    $delete_query= mysqli_query($connection, $query);
    header("Location: comments.php");
}

?>