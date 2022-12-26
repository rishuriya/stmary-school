<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT Queries 
            
    </h6>
  </div>

  <div class="card-body">
<?php
	
	
if(isset($_POST["edit_btn"]))
{
	 $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM userinfodata WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row) {
			
		
			?>


  	<div class="form-group">
        <label> Username </label>
        <input type="text" name="user" value="<?php echo $row['user']?>" class="form-control" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>Mobile</label>
        <input type="input" name="mobile" value="<?php echo $row['mobile']?>" class="form-control" placeholder="Enter Password">
    </div>
    <div class="form-group">
        <label>Comment</label>
        <input type="input" name="Comment" value="<?php echo $row['comment']?>" class="form-control" placeholder="Enter Password">
    </div>
    	<a href="register.php" class='btn btn-outline-primary'>CANCEL</a>
    	<button  class="btn btn-outline-danger">DELETE</button>
           		<?php
		}
		
	}

?> 
  	</div>
  </div>



<?php
include('includes/script.php');
include('includes/footer.php');
?>
</div>