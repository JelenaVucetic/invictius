<?php
$query="SELECT * FROM services";
$select_services= mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_services))
{
$service_title = $row['service_title'];
$service_text = $row['service_text'];
$service_img1 = $row['service_img1'];
$service_img2 = $row['service_img2'];
$service_img3 = $row['service_img3'];

?>
	<div class="section" id="section1">
    <div class="service2">
      <div class="left">
        
        <div class="slide" id="slide1">
          <div class="intro">
            <img class="img1" src="images/<?php echo $service_img1?>" alt="">
          </div>
        </div>

        <div class="slide" id="slide2">
          <img class="img2" src="images/<?php echo $service_img2?>" alt="">
        </div>
        
        <div class="slide" id="slide3">
          <img class="img3" src="images/<?php echo $service_img3?>" alt="">
        </div>
      </div>

      <div class="right">
        <?php echo "<h1>$service_title</h1>"; ?>
        <?php echo "<p>$service_text<p>"; ?>
        <?php include "modal.php";?>
      </div>
    </div>
  </div>
<?  
}
?>