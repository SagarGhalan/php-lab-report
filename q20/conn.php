<?php

$conn = mysqli_connect('localhost','root','','db_info');
if(!isset($conn))
{
    echo "Connection failed";
}

?>