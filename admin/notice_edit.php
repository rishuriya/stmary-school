<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT 
            
    </h6>
  </div>

  <div class="card-body">
<?php
	
	
if(isset($_POST["edit_btn"]))
{
	 $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM notice WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row) {
			
		
			?>


  	<form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control"
                                    placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label>Subtitle</label>
                                <input type="text" name="edit_subtitle" value="<?php echo $row['subtitle'] ?>" class="form-control"
                                    placeholder="Enter subtitle">
                            </div>
                            <div class="form-group">
                                <label>Body</label>
                                <input type="text" name="edit_body" value="<?php echo $row['body'] ?>"
										  class="form-control" placeholder="Enter Body">
                            </div>
							<div class="form-group">
                                <label>Link</label>
                                <input type="text" name="edit_link" value="<?php echo $row['link'] ?>" class="form-control"
                                    placeholder="Enter Link">
                            </div>
                            

                            <a href="notice.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="n_updatebtn" class="btn btn-primary"> Update </button>

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