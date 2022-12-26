<?php

include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
$id = $_GET['id'];

$sql="Select * from subject where id='$id'";
$query_run=mysqli_query($connection,$sql);
$row= mysqli_fetch_assoc($query_run);
$subject=$row['subject'];
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Chapter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
			<div class="form-group">
                <label> Order </label>
                <input type="text" name="sequence" class="form-control" placeholder="Enter Order... " required>
            </div>
            <div class="form-group">
                <label> Chapter </label>
                <input type="text" name="chapter" class="form-control" placeholder="Enter Chapter... " required>
            </div>
            <div class="form-group">
                <label> Upload File </label>
                <input type="file" name="file" id='file' class="form-control">
            </div>
            <input type="hidden" name="class" value="<?php echo $row['class'];?>">
            <input type="hidden" name="sid" value="<?php echo $id;?>">
            <input type="hidden" name="uid" value="<?php echo $row['uid'];?>">
            <input type="hidden" name="subject" value="<?php echo $subject;?>">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="chapterbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Chapter in <?php echo $subject; ?> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Chapter 
            </button>
    </h6>
  </div>

  <div class="card-body">
<?php
    


    
    $query="Select * from chapter where sid='$id' order by sequence;";
    $query_run1=mysqli_query($connection,$query);

?>
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> UID </th>
            <th>SUBJECT </th>
            <th> SID </th>
            <th> CHAPTER </th>
            <th>CLASS </th>
            <th>SEQUENCE </th>
            
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
          <?php

          if(mysqli_num_rows($query_run1)>0)
          {
            while($row1= mysqli_fetch_assoc($query_run1))
              { 

                ?>

          <tr>
            <td><?php echo $row1 ['id'];?> </td>
            <td><?php echo $row1 ['uid'];?> </td>
            <td><?php echo $row1 ['subject'];?> </td>
            <td><?php echo $row1 ['sid'];?> </td>
            <td><?php echo $row1 ['chapter'];?> </td>
            <td><?php echo $row1 ['class'];?> </td>
            <td><?php echo $row1 ['sequence'];?> </td>
            
              <td> <form action="chapter_edit.php" method="post">
                 <input type="hidden" name="edit_id" value="<?php echo $row1 ['id'];?>">
              <button type="submit" name="edit_btn" class="btn btn-primary">EDIT</button>
                </form></td>
            
            <td> <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row1['id']; ?>">
				<input type="hidden" name="sid" value="<?php echo $row1['sid']; ?>">
                  <button type="submit" name="chapterdelete_btn" class="btn btn-danger"> DELETE</button>
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