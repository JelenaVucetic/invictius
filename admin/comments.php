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
                    case 'add_comment';
                    include "includes/add_comment.php";
                    break;

                    default:
                    include "includes/view_all_comments.php";
                    break;
                }
                ?>
                 <br>
                <li>
                <a href="comments.php?source=add_comment">Add comment</a>
                </li> 

           
                
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
