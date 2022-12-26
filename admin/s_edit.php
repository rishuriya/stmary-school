<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT SUBJECT
            
    </h6>
  </div>

  <div class="card-body">
<?php
	
	
if(isset($_POST["edit_btn"]))
{
	 $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM subject WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row) {
			
		
			?>


  	<form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> SUBJECT </label>
                                <input type="text" name="edit_subject" value="<?php echo $row['subject'] ?>" class="form-control"
                                    placeholder="Enter title">
                            </div>
                           
                            

                            <a href="class.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="s_updatebtn" class="btn btn-primary"> Update </button>

                        </form>
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