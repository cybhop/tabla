<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
   
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Manage Meta Tags</title>
</head>
<body>
    

 <!-- Modal -->
<div class="modal fade" id="insertdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insertdataLabel">Insert Meta Tags</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="metaAddDb.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group mb-3">
            <label for="">Meta Url</label>
            <input type="text" class="form-control" name="meta_url" placeholder="Index.php" required>
        </div>
        <div class="form-group mb-3">
        <label for="">Meta Title</label>
        <textarea  class="form-control" rows="5" cols="25" name="meta_title" placeholder="About" required></textarea> 
        </div>

        <div class="form-group mb-3">
            <label for="">Meta Keywords</label>
            <input type="text" class="form-control" name="meta_keywords" placeholder="tabla" required>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save_data">save data</button>
      </div>
      </form>
    </div>
  </div>
</div>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <?php 
            if(isset($_SESSION['status']) && $_SESSION['status'] != '') 
            {
              
              ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hey !</strong> <?php echo $_SESSION['status']; ?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
              unset($_SESSION['status']);
            }
          ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Manage Meta Tags</h4>
                  
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#insertdata">
                       Add New Meta
                    </button>
                </div>
                <div class="card-body">
                <table class="table table-striped table-brodered table-danger">
                        <thead>
                          <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Meta Url</th>
                            <th scope="col">Meta Title</th>

                            <th scope="col">Meta Keywords</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          

                            $connection = mysqli_connect("localhost" , "root", "" , "dynamic_metatag");

                            $fetch_query = "SELECT * FROM meta_tag";
                            $fetch_query_run = mysqli_query($connection , $fetch_query);

                            if(mysqli_num_rows($fetch_query_run) > 0 )
                            {
                              while($row = mysqli_fetch_assoc($fetch_query_run))
                                {
                                 
                                  ?>
                                      <tr>
                                        <td class="meta_id"><?php echo $row['meta_id']; ?></td>
                                        <td><?php echo $row['meta_url']; ?></td>
                                        <td><?php echo $row['meta_title']; ?></td>
                                
                                        <td><?php echo $row['meta_keywords']; ?></td>
                              
                                        <td>
                                          <a href="#" class="btn btn-danger btn-sm delete_btn">DELETE</a>
                                        </td>
                                      </tr>
                                  <?php
                                }
                            }
                            else
                            {
                              ?>
                               <tr colspan="4">NO RECORDS FOUND</tr>
                              <?php
                            }

                          ?>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
  </div>

  <script>

$(document).ready(function () {
   $('.delete_btn').click(function (e) {
     e.preventDefault();
     
     var meta_id = $(this).closest('tr').find('.meta_id').text();
       /* console.log('tile_id'); */

       $.ajax({
         method: "POST",
         url: "metaAddDb.php",
         data: {
           'click_delete_btn': true,
           'meta_id': meta_id,
         },
         success: function (response) {
             console.log(response);
             window.location.reload();
         }
       })
   });
 });
 
 
</script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>