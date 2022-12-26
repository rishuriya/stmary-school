<?php

include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
$id = $_GET['id'];

$sql="Select * from v_class where id='$id'";
$query_run=mysqli_query($connection,$sql);
$row= mysqli_fetch_assoc($query_run);
$class=$row['class'];
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Subject </label>
                <input type="text" name="Subject" class="form-control" placeholder="Enter Subject... ">
            </div>
            
            <input type="hidden" name="uid" value="<?php echo $id;?>">
            <input type="hidden" name="class" value="<?php echo $class;?>">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="v_subjectbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Subject in <?php echo $class; ?> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Subject 
            </button>
    </h6>
  </div>

  <div class="card-body">
<?php
    


    
    $query="Select * from v_subject where uid='$id'";
    $query_run1=mysqli_query($connection,$query);

?>
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> UID </th>
            <th>SUBJECT </th>
            <th>CLASS </th>
            <th>VIEW </th>
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
            <td><?php echo $row1 ['class'];?> </td>
            
            <td>
              <a href='v_chapter.php?id=<?php echo $row1 ['id'];?>'> <button class="btn btn-success">VIEW</button></a>
              <form method="get" action="class.php">
                <input type="hidden" name="id" value="<?php $row1;?>">
                <input type="submit" style="color: transparent; background-color: transparent; border-color: transparent;">
              </form>
            </td>
			  <td> <form action="sv_edit.php" method="post">
                 <input type="hidden" name="edit_id" value="<?php echo $row1 ['id'];?>">
              <button type="submit" name="edit_btn" class="btn btn-primary">EDIT</button>
                </form></td>
            <td> <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="v_sdelete_btn" class="btn btn-danger"> DELETE</button>
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