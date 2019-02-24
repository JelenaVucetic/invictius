<?php
include "./functions.php";

if(isset($_POST['create_service']))
{
    $service_title = $_POST['service_title'];   
    $service_text = $_POST['service_text'];

    $service_img1 = $_FILES['service_img1']['name'];
    $image_location = $_FILES['service_img1']['tmp_name'];
    move_uploaded_file($image_location1 , "../images/$service_img1");
    $service_img2 = $_FILES['service_img2']['name'];
    $image_location = $_FILES['service_img2']['tmp_name'];
    move_uploaded_file($image_location2 , "../images/$service_img2");
    $service_img3 = $_FILES['service_img3']['name'];
    $image_location = $_FILES['service_img3']['tmp_name'];
    move_uploaded_file($image_location3 , "../images/$service_img3");

    $query_services = "INSERT INTO services(service_title, service_text , service_img1, service_img2, service_img3) ";
    $query_services .= "VALUES('{$service_title}' , '{$service_text}' , '{$service_img1}' , '{$service_img2}', '{$service_img3}')";

    $create_service_query= mysqli_query($connection, $query_services); 
    
    $service_id = mysqli_insert_id($connection);
    
}
?>



<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Service title</label> <br>
        <input type="text" class="form-control" name="service_title">
    </div>

    <br>

    <div class="form-group">
        <label for="content">Service text</label> <br>
        <textarea class="form-control" name="service_text" id="" cols="30" rows="10"></textarea>
    </div>

    <br>

    <div class="form-group">
        <label for="image">Service image 1</label> <br>
        <input type="file" name="service_img1">
    </div>

    <br>

    <div class="form-group">
        <label for="image">Service image 2</label> <br>
        <input type="file" name="service_img2">
    </div>

    <br>

    <div class="form-group">
        <label for="image">Service image 3</label> <br>
        <input type="file" name="service_img3">
    </div>

    <br>

    <div>
    <input class="btn btn-primary" type="submit" name="create_service" value="Publish">
    </div>


</form>