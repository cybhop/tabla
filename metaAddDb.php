<?php
include 'DB.php';

if(isset($_POST['save_data'])){
    $metatag_url = $_POST['meta_url'];
    $metatag_title = $_POST['meta_title'];
    $metatag_keywords = $_POST['meta_keywords'];

    if($metatag_url !=  ''){
        $insertqry ="INSERT INTO meta_tag(meta_url, meta_title, meta_keywords) 
        VALUES ('$metatag_url ', '$metatag_title' , '$metatag_keywords')";
        $insertres = mysqli_query($con,$insertqry);

        echo '<script>alert("Meta Tag Added Successfully");
        window.location="manage_tag.php";
        </script>';
    }
}

  /* Delete Data */

  if(isset($_POST['click_delete_btn']))
  {
    $id = $_POST['meta_id'];

    $delete_query = "DELETE FROM meta_tag WHERE meta_id='$id'";
    $connection = mysqli_connect("localhost" , "root", "" , "dynamic_metatag");
    $delete_query_run = mysqli_query($connection, $delete_query);

    if($delete_query_run)
    {
        echo "Data Deleted Successfully";
    }
    else
    {
        echo "Data Deletion Failed";
    }
  }

?>