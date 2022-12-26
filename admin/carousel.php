<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
 ?>

<div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label>Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
            
            
            
            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="file" id='file' class="form-control">
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="image_save" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Carousel
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmember">
              Add  Image
            </button>
    </h6>
  </div>

  <div class="card-body">
  	<?php


  	?>

  	<div class="table-responsive">
<?php
    


    
    $query="Select * from carousel";
    $query_run=mysqli_query($connection,$query);

?>
    

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Title </th>
            
            
            <th>Image </th>
            
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
          <?php

          if(mysqli_num_rows($query_run)>0)
          {
            while($row= mysqli_fetch_assoc($query_run))
              { 

                ?>

          <tr class="ml-auto py-3">
            <td><?php echo $row ['id'];?> </td>
            <td><?php echo $row ['title'];?> </td>
            
            
            <td><img src='<?php echo $row ['file'];?>' height='75px' width='75px'></td>
            
            <td> <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="carouseldelete_btn" class="btn btn-warning"> DELETE</button>
                </form></td>
          </tr>
             <?php
              } 
          }
          else

          {
            echo "NO RECORD FOUND";
          }

         ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<?php include('includes/script.php');
    include('includes/footer.php');
?>