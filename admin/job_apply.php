<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
 ?>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Job Application
            
    </h6>
  </div>

  <div class="card-body">
  	<?php


  	?>

  	<div class="table-responsive">
<?php
    


    
    $query="Select * from career";
    $query_run=mysqli_query($connection,$query);

?>
    

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NAME </th>
            <th width='15%'> ADDRESS </th>
            <th> POSITION </th>
            <th> ABOUT </th>
            <th>IMAGE </th>
            <th>RESUME </th>
            <th>ACTION </th>
          </tr>
        </thead>
        <tbody>
          <?php

          if(mysqli_num_rows($query_run)>0)
          {
            while($row= mysqli_fetch_assoc($query_run))
              { 
$id=$row['id'];
                ?>

          <tr class="ml-auto py-3">
            <td><?php echo $row ['fname']." ".$row['lname'];?> </td>
            <td><?php echo $row ['adress1']." ".$row['adress2'].", ".$row['city'].", ".$row['state']."-".$row['pin']?> </td>
            <td><?php echo $row ['post'];?> </td>
			  <td><?php echo $row ['about'];?> </td>
            
            <td><img src='../<?php echo $row ['photo'];?>' height='75px' width='75px'></td>
			  <td><a href='../<?php echo $row ['resume'];?>' class='btn btn-info' target="_blank">Resume</a></td>
            <td><?php 
				if($row['remark']!=null)
				{?><form action="../code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="jobdelete" class="btn btn-warning"> DELETE</button>
                </form>
			  <?php }
				else
				{?><a href="#" style='text-decoration:none; text-color=black;' class='btn btn-warning' data-toggle="modal" data-target="#addmember<?php echo $id?>">Remark</a><?php
				}?>
			  </td>
          </tr>
<div class="modal fade" id="addmember<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Remark</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../code.php" method="POST" >
<?php			$sql="Select * from career where id =$id";
				$query_run1=mysqli_query($connection,$sql);
				$row1= mysqli_fetch_assoc($query_run1)
				?>
        <div class="modal-body">
<input type="hidden" name="id" value="<?php echo $row1['id'];?>">
            <div class="form-group">
                <label>EMAIL </label>
                <input type="text" name="title" class="form-control" value='<?php echo $row1['email'];?>' readonly>
            </div>
            <div class="form-group">
                <label>CONTACT NUMBER </label>
                <input type="text" name="title" class="form-control" value='<?php echo $row1['phone'];?>' readonly>
            </div>
            <div class="form-group">
                <label>REMARK</label>
                <input type="text" name="value" class="form-control" placeholder='Enter Remark'>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="remark" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

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