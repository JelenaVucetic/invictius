<?php

function confirmQuery($result)
{
    global $connection;

    if(!$result)
    {
        die("QYERY FAILED " . mysqli_error($connection));
    }
  
}