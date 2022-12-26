<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT CHAPTER ORDER
            
    </h6>
  </div>

  <div class="card-body">
<?php
	
	
if(isset($_POST["edit_btn"]))
{
	 $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM chapter WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row) {
			
		
			?>


  	<form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Order </label>
                                <input type="text" name="edit_sequence" value="<?php echo $row['sequence'] ?>" class="form-control"
                                    placeholder="Enter Order">
                            </div>
                           
                            <input type="hidden" name="sid" value="<?php echo $row['sid'];?>">

                            <a href="chapter.php?id=<?php echo $row['sid'];?>" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="chapter_updatebtn" class="btn btn-primary"> Update </button>

                        </form>
           		<?php
		}
		
	}
	  
	  if(isset($_POST["vedit_btn"]))
{
	 $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM v_chapter WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row) {
			
		
			?>


  	<form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Order </label>
                                <input type="text" name="edit_sequence" value="<?php echo $row['sequence'] ?>" class="form-control"
                                    placeholder="Enter Order">
                            </div>
                           
                            <input type="hidden" name="sid" value="<?php echo $row['sid'];?>">

                            <a href="v_chapter.php?id=<?php echo $row['sid'];?>" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="vchapter_updatebtn" class="btn btn-primary"> Update </button>

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