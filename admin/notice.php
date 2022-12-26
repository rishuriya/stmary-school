<?php
include 'security.php';
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label>Sub-title</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Enter subtitle">
            </div>
            <div class="form-group">
                <label>Body</label>
				<textarea name="body" class="form-control" placeholder="Enter Notice"></textarea>
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="text" name="link" class="form-control" placeholder="plz specify location with extension">
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="noticebtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Notice Panel 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Notice 
            </button>
    </h6>
  </div>

  <div class="card-body">
<?php
    
    $query="Select * from notice";
    $query_run=mysqli_query($connection,$query);

?>
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Title </th>
            <th>Subtitle </th>
            <th>Body</th>
            <th>Link</th>
            <th>EDIT </th>
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

          <tr>
            <td><?php echo $row ['id'];?> </td>
            <td><?php echo $row ['title'];?> </td>
            <td><?php echo $row ['subtitle'];?> </td>
            <td><?php echo $row ['body'];?> </td>
			<td><?php echo $row ['link'];?> </td>
            
            <td>
              <form action="notice_edit.php" method="POST">
                <input type="hidden" name="edit_id" value="<?php echo $row ['id'];?>">
              <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
              </form>
            </td>
            <td> <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="ndelete_btn" class="btn btn-danger"> DELETE</button>
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



<?php
include('includes/script.php');
include('includes/footer.php');
?>