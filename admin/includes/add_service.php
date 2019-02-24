<?php
include "./functions.php";

if(isset($_POST['create_service']))
{
    $service_title = $_POST['service_title'];   
    $service_text = $_POST['service_text'];

    $query_services = "INSERT INTO services(service_title, service_text) ";
    $query_services .= "VALUES('{$service_title}' , '{$service_text}')";

    $create_service_query= mysqli_query($connection, $query_services); 
    
    $service_id = mysqli_insert_id($connection);
    
    $image_names = $_FILES['service_image']['name'];
    $image_location = $_FILES['service_image']['tmp_name'];
    $i=0;
    foreach( $image_names as $name)
    {
        $query_image = "INSERT INTO images (service_id, image_name) VALUES ($service_id,'{$name}')";
        mysqli_query($connection, $query_image);

        move_uploaded_file($image_location[$i], "../images/$name");
        $i++;
    }
    
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
        <label for="image">Service image</label> <br>
        <input type="file" name="service_image[]" multiple>
    </div>

    <br>

    <div>
    <input class="btn btn-primary" type="submit" name="create_service" value="Publish">
    </div>


</form>