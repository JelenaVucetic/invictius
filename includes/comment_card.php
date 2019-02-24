 <?php
$query = "SELECT * FROM comments 
          WHERE comment_status= 'approved'
          ORDER BY comment_id DESC ";
$select_comment_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_comment_query))
{
$comment_author = $row['comment_author'];
$comment_author_description = $row['comment_author_description'];
$comment_image = $row['comment_image'];
$comment_text = $row['comment_text'];
$comment_date= $row['comment_date'];
$comment_image = $row['comment_image'];

?>

<div class="slide" id="slide4">
    <div class="card hideme" id="card">
        <div class="card_data">
            <div class="card_heading">
                <h3 class="card_author"><?php echo $comment_author; ?></h3>
                <p class="card_author_description"><?php echo $comment_author_description; ?></p>
            </div>
                <p class="card_excerpt"><?php echo $comment_text; ?></p>
            <div class="card_meta">
            <?php echo $comment_date; ?>
            </div>
        </div>
    </div>
</div>
  
<?php } ?>