<?php 
include "./functions.php";

if(isset($_GET['id_s']))
{
    $the_id_service = $_GET['id_s'];
}

$query="SELECT * FROM services WHERE service_id = $the_id_service";
$select_service_by_id = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_service_by_id))
{
    $service_id = $row['service_id'];
    $service_title = $row['service_title'];
    $service_text = $row['service_text'];
    $service_img1 = $row['service_img1'];
    $service_img2 = $row['service_img2'];
    $service_img3 = $row['service_img3'];
}




if(isset($_POST['update_service']))
{
    $service_title = $_POST['service_title'];  
    $service_text = $_POST['service_text'];

    $service_img1 = $_FILES['service_img1']['name'];
    $image_location = $_FILES['service_img1']['tmp_name'];

    $service_img2 = $_FILES['service_img2']['name'];
    $image_location = $_FILES['service_img2']['tmp_name'];

    $service_img3 = $_FILES['service_img3']['name'];
    $image_location = $_FILES['service_img3']['tmp_name'];

    $query = "UPDATE services SET ";
    $query .="service_title = '{$service_title}', ";
    $query .="service_text = '{$service_text}', ";
    $query .="service_img1 = '{$service_img1}', ";
    $query .="service_img2 = '{$service_img2}', ";
    $query .="service_img3 = '{$service_img3}' ";
    $query .= "WHERE service_id = {$the_id_service} ";
    
    $update_service = mysqli_query($connection, $query);
    confirmQuery($update_service);
  
}
?>

<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="title">Service title</label> <br>
    <input value="<?php echo $service_title; ?>" type="text" class="form-control" name="service_title">
</div>

<br>

<div class="form-group">
    <label for="title">Service text</label> <br>
    <textarea class="form-control" name="service_text" id="" cols="30" rows="10"><?php echo $service_text;?></textarea>
</div>

<br>

<div class="form-group">
    <td><img width='100' src='../images/<?php echo $service_img1 ?>' alt='image'></td>;<br>
    <input type="file" name="service_img1" multiple>
</div>

<br>

<div class="form-group">
    <td><img width='100' src='../images/<?php echo $service_img2 ?>' alt='image'></td>;<br>
    <input type="file" name="service_img2" multiple>
</div>

<br>

<div class="form-group">
    <td><img width='100' src='../images/<?php echo $service_img3 ?>' alt='image'></td>;<br>
    <input type="file" name="service_img3" multiple>
</div>

<br>

<div>
<input class="btn btn-primary" type="submit" name="update_service" value="Update">
</div>


</form>