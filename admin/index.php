<?php
include "../db.php"; 
?>

<!DOCTYPE html>
<html lang="en">
   
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">
                    Welcome to admin
                    
                </h1>

                <?php

                if(isset($_GET['source']))
                {
                    $source = $_GET['source'];
                }
                else
                {
                    $source = '';
                }
                switch($source)
                {
                    case 'edit_service';
                    include "includes/edit_service.php";
                    break;

                    case 'add_service';
                    include "includes/add_service.php";
                    break;

                    default:
                    include "includes/view_all_service.php";
                    break;
                }
                ?>

                <br>
                <li>
                <a href="index.php?source=add_service">Add service</a>
                </li>

           
                
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
