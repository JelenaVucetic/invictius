
 <?php
$query="SELECT * FROM initial_page";
$select_initial_page = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_initial_page))
{
$initial_page_title = $row['initial_page_title'];
$initial_page_text = $row['initial_page_text'];
$initial_page_img = $row['initial_page_img'];

?>
	<div class="section " id="section0">
		<div class="intro">
			<div class="initial_page">
        <div class="initial-left">
          <div class="initial-left-content">
            <?php echo "<h1>$initial_page_title</h1>"; ?>
            <?php echo "<p>$initial_page_text<p>"; ?>
                <?php
                include "./includes/modal_initial.php";
                ?>
          </div>
        </div>
        <div class="initial-right">
             <img class="img0" src="images/<?php echo $initial_page_img?>" alt="">
         </div>     
      </div>
         <!-- Scroll mouse -->
  <div class="scroll-downs">
    <div class="mousey">
        <div class="scroller"></div>
    </div>
    </div>

</div>
    </div>
<?  
}
?>
   