<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Service ID</th>
            <th>Title</th>
            <th>text</th>
            <th>Image1</th>
            <th>Image2</th>
            <th>Image3</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $query="SELECT * FROM services";
    $select_service = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_service))
    {
        $service_id = $row['service_id'];
        $service_title = $row['service_title'];
        $service_text = $row['service_text'];
        $service_img1 = $row['service_img1'];
        $service_img2 = $row['service_img2'];
        $service_img3 = $row['service_img3'];

        echo "<tr>";
        echo "<td>$service_id</td>";
        echo "<td>$service_title</td>";
        echo "<td>$service_text</td>";
      
        echo "<td><img width='100' src='../images/<?php echo $service_img1?>' alt='image1'></td>";
        echo "<td><img width='100' src='../images/<?php echo $service_img2?>' alt='image2'></td>";
        echo "<td><img width='100' src='../images/<?php echo $service_img3?>' alt='image3'></td>";
        
        echo "<td><a href='index.php?source=edit_service&id_s={$service_id}'>Edit</a></td>";
        echo "<td><a href='index.php?delete={$service_id}'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
</tbody>
</table>


<?php

if(isset($_GET['delete']))
{
    $the_service_id = $_GET['delete'];
    $query= "DELETE FROM services WHERE service_id = {$the_service_id}";
    $delete_query= mysqli_query($connection, $query);
    header("Location: index.php");
}

?>