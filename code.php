<?php
session_start();
$connection = mysqli_connect('sg2nlmysql23plsk.secureserver.net','stmarys','Stmarys@1234','ph10985541241_stmary');

if(isset($_POST["apply"]))
{
	//$id;
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$mobile=$_POST['phone'];
	$post=$_POST['post'];
	$address1=$_POST['inputAddress'];
	$adress2=$_POST['inputAddress2'];
	$city=$_POST['inputCity'];
	$state=$_POST['state'];
	$pin=$_POST['inputZip'];
	$about=$_POST['About'];
	$file=$_FILES['resume'];
	$photo=$_FILES['photo'];
	
    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetmp=$file['tmp_name'];


    $fileext=explode('.', $filename);
    $filecheck=strtolower(end($fileext));


    $fileextstored = array('pdf','jpg');
	$photoname=$photo['name'];
    $photoerror=$photo['error'];
    $phototmp=$photo['tmp_name'];


    $photoext=explode('.', $photoname);
    $photocheck=strtolower(end($photoext));

echo $state;
    $photoextstored = array('jpeg','gif','png','jpg');
	if(in_array($filecheck, $fileextstored) )
    {echo $fname;
		if(in_array($photocheck, $photoextstored)){
			echo $lname;
		$destinationfolderphoto='career/photo/'.$mobile.$fname.$lname.$photoname;
        $destinationfolder='career/resume/'.$mobile.$fname.$lname.$filename;
		$query="insert into career (fname,lname,email,phone,post,adress1,adress2,city,state,pin,about,resume,photo) values ('$fname','$lname','$email','$mobile','$post','$address1','$adress2','$city','$state','$pin','$about','$destinationfolder','$destinationfolderphoto')";

        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
        	move_uploaded_file($filetmp, $destinationfolder);
			move_uploaded_file($phototmp, $destinationfolderphoto);
			$_SESSION['status'] ='Succesfully Applied, Check Status Using Mobile No' ;
			header('location:carrier.php');
		}
	}
	}

}
if(isset($_POST["remark"]))
{
	$remark=$_POST['value'];
	$id=$_POST['id'];
	$sql="update career set remark='$remark' where id='$id'";
	$query_run = mysqli_query($connection, $sql);
	if($query_run)
	{
		header('location:admin/job_apply.php');
	}
}
if(isset($_POST["jobdelete"])){
	$id=$_POST['delete_id'];
	$query="Select * from career where id='$id'";
	$sql="delete from career where id='$id'";
	$query_run1 = mysqli_query($connection, $query);
	if($query_run1)
	{
		$row=mysqli_fetch_assoc($query_run1);
		$resume=$row['resume'];
		$photo=$row['photo'];
	$query_run = mysqli_query($connection, $sql);
	if($query_run)
	{	
		unlink($resume);
		unlink($photo);
		header('location:admin/job_apply.php');
	}
	}
}