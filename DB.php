<?php

 $con = mysqli_connect('localhost', 'root', '', 'dynamic_metatag');

 if(mysqli_connect_error())
 {
    echo "Failed to Connect".mysqli_connect_error();
 }

?>