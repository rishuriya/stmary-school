<?php
include('security.php');

if(isset($_POST["registerbtn"]))
{
	//$id;
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
    

	if ($password===$confirmpassword) {
	$query="insert into register (username,email,password) values('$username','$email','$password')";

	$query_run=mysqli_query($connection,$query);
	if($query_run){
		//echo "saved";
		$_SESSION['Success']= "Admin profile added";
		header('location:register.php');

	}
	else{
		//echo "not saved";
		$_SESSION['Status']= "Admin profile NOT added";
		header('location:register.php');
		echo "connect";
	}



	}else
	{
		$_SESSION['Status']= "Password and confirm password DOES NOT match";
		header('location:register.php');
		echo "connect";
	}
	

}

if(isset($_POST['updatebtn']))//register_edit
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertype = $_POST['edit_usertype'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}

if(isset($_POST['delete_btn']))// admin panel
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}



    

if(isset($_POST['updatebtn']))//about_edit
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_title'];
    $email = $_POST['edit_subtitle'];
    $password = $_POST['edit_description'];
    $usertype = $_POST['edit_link'];

    $query = "UPDATE aboutus SET title='$username', subtitle='$email', description='$password',link='$usertype' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: aboutus.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: aboutus.php'); 
    }
}






if(isset($_POST['image_save']))// carousel
{
    $title=$_POST['title'];
    
    $file=$_FILES['file'];
    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetmp=$file['tmp_name'];


    $fileext=explode('.', $filename);
    $filecheck=strtolower(end($fileext));


    $fileextstored = array('png','jpg','gif','jpeg');

    if(in_array($filecheck, $fileextstored))
    {
        $destinationfolder='img/'.$filename;

        $query="insert into carousel (title,file) values ('$title','$destinationfolder')";

        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
        move_uploaded_file($filetmp, $destinationfolder);
        $_SESSION['success'] = "Carousel added";
        header('Location: carousel.php');
        }
        else
        {
        $_SESSION['success'] = "Carousel NOT added";
        header('Location: register.php');
     }
    }
}
if(isset($_POST['carouseldelete_btn']))// carousel_delete
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM carousel WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: carousel.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: index.php'); 
    }    
}


if(isset($_POST["classbtn"]))//notes_class
{
    //$id;
    $class=$_POST['class'];
   
    $query="insert into class (class) values('$class')";

    $query_run=mysqli_query($connection,$query);
    if($query_run){
        //echo "saved";
        $_SESSION['Success']= "Admin profile added";
        header('location:class.php');

    }
    else{
        //echo "not saved";
        $_SESSION['Status']= "Admin profile NOT added";
        
        echo "connect";
    }

}

if(isset($_POST["subjectbtn"]))//notes_subject
{
    //$id;
    $subject=$_POST['Subject'];
    $uid=$_POST['uid'];
    $class=$_POST['class'];
   
    $query="insert into subject (uid,subject,class) values('$uid','$subject','$class')";

    $query_run=mysqli_query($connection,$query);
    if($query_run){
        //echo "saved";
        $_SESSION['Success']= "Admin profile added";
        header('location:subject.php?id='.$uid);

    }
    else{
        //echo "not saved";
        $_SESSION['Status']= "Admin profile NOT added";
        
        echo "connect";
    }
    

}

if(isset($_POST['sdelete_btn']))// member
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM subject WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {	
	 	$sql = "DELETE FROM chapter WHERE sid='$id' ";
        $query_ru1 = mysqli_query($connection, $sql);
        header('Location: class.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: member.php'); 
    }    
}

if(isset($_POST['chapterbtn']))// notes_chapter
{
    $chapter=$_POST['chapter'];
    $uid=$_POST['uid'];
    $sid=$_POST['sid'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    $sequence=$_POST['sequence'];
    $file=$_FILES['file'];
    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetmp=$file['tmp_name'];


    $fileext=explode('.', $filename);
    $filecheck=strtolower(end($fileext));


    $fileextstored = array('pdf','jpeg');
	

    if(in_array($filecheck, $fileextstored))
    {
        $destinationfolder="class/".$class."/".$class.$chapter.$subject.$filename;

        $query="insert into chapter (uid,subject,sid,chapter,class,file,sequence) values('$uid','$subject','$sid','$chapter','$class','$destinationfolder','$sequence')";

        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
        move_uploaded_file($filetmp, $destinationfolder);
        $_SESSION['success'] = "Carousel added";
        header('Location: chapter.php?id='.$sid);
        }
        else
        {
        $_SESSION['success'] = "Carousel NOT added";
        header('Location: index.php');
     }
    }
}

if(isset($_POST['chapterdelete_btn']))//chapter_delete
{
    $id = $_POST['delete_id'];
	$sid=$_POST['sid'];
    $query = "DELETE FROM chapter WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: chapter.php?id='.$sid); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: index.php'); 
    }    
}

if(isset($_POST["noticebtn"]))
{
    //$id;
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $body=$_POST['body'];
	$link=$_POST['link'];
    $query="insert into notice (title,subtitle,body,link) values('$title','$subtitle','$body','$link')";

    $query_run=mysqli_query($connection,$query);
    if($query_run){
        //echo "saved";
        $_SESSION['Success']= "Admin profile added";
        header('location:notice.php');

    }
    else{
        //echo "not saved";
        $_SESSION['Status']= "Admin profile NOT added";
        
        echo "connect";
    }

}


if(isset($_POST["v_classbtn"]))//insert_video_class
{
    //$id;
    $class=$_POST['class'];
   
    $query="insert into v_class (class) values('$class')";

    $query_run=mysqli_query($connection,$query);
    if($query_run){
        //echo "saved";
        $_SESSION['Success']= "Admin profile added";
        header('location:video.php');

    }
    else{
        //echo "not saved";
        $_SESSION['Status']= "Admin profile NOT added";
        
        echo "connect";
    }

}

if(isset($_POST["v_subjectbtn"]))
{
    //$id;
    $subject=$_POST['Subject'];
    $uid=$_POST['uid'];
    $class=$_POST['class'];
   
    $query="insert into v_subject (uid,subject,class) values('$uid','$subject','$class')";

    $query_run=mysqli_query($connection,$query);
    if($query_run){
        //echo "saved";
        $_SESSION['Success']= "Admin profile added";
        header('location:v_subject.php?id='.$uid);

    }
    else{
        //echo "not saved";
        $_SESSION['Status']= "Admin profile NOT added";
        
        echo "connect";
    }
    

}

if(isset($_POST['v_sdelete_btn']))// video_subject_delete
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM v_subject WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $sql = "DELETE FROM chapter WHERE sid='$id' ";
        $query_run = mysqli_query($connection, $sql);
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: video.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: member.php'); 
    }    
}

if(isset($_POST['v_chapterbtn']))// video_chapter_added
{
    $chapter=$_POST['chapter'];
    $uid=$_POST['uid'];
    $sid=$_POST['sid'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
	$sequence=$_POST['order'];
    
    $file=$_POST['file'];
    

   
        

        $query="insert into v_chapter (uid,subject,sid,chapter,class,file,sequence) values('$uid','$subject','$sid','$chapter','$class','$file','$sequence')";

        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
        
        $_SESSION['success'] = "Carousel added";
        header('Location: v_chapter.php?id='.$sid);
        }
        else
        {
        $_SESSION['success'] = "Carousel NOT added";
        header('Location: index.php');
     }
    
}

if(isset($_POST['v_chapterdelete_btn']))// video_chapterdelete_btn
{
    $id = $_POST['delete_id'];
	$sid=$_POST['sid'];
    $query = "DELETE FROM v_chapter WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: v_chapter.php?id='.$sid); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: member.php'); 
    }    
}
if(isset($_POST['ndelete_btn']))// member
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM notice WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $sql = "DELETE FROM chapter WHERE sid='$id' ";
        $query_run = mysqli_query($connection, $sql);
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: notice.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: member.php'); 
    }    
}

if(isset($_POST['n_updatebtn']))//register_edit
{
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $subtitle = $_POST['edit_subtitle'];
    $body = $_POST['edit_body'];
	$link = $_POST['edit_link'];

    $query = "UPDATE notice SET title='$title', subtitle='$subtitle', body='$body', link='$link' WHERE id=$id";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: notice.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: index.php'); 
    }
}

if(isset($_POST['c_updatebtn']))//class_edit
{
    $id = $_POST['edit_id'];
    $class = $_POST['edit_class'];
    

    $query = "UPDATE class SET class='$class' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: class.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        
    }
}

if(isset($_POST['s_updatebtn']))//subject_edit
{
    $id = $_POST['edit_id'];
    $subject = $_POST['edit_subject'];
    

    $query = "UPDATE subject SET subject='$subject' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: class.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        
    }
}

if(isset($_POST['cv_updatebtn']))//video_class_edit
{
    $id = $_POST['edit_id'];
    $class = $_POST['edit_class'];
    

    $query = "UPDATE v_class SET class='$class' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: video.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        
    }
}

if(isset($_POST['sv_updatebtn']))//video_subject_edit
{
    $id = $_POST['edit_id'];
    $subject = $_POST['edit_subject'];
    

    $query = "UPDATE v_subject SET subject='$subject' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: video.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        
    }
}

if(isset($_POST['chapter_updatebtn']))//chapter_edit
{
    $id = $_POST['edit_id'];
    $sequence = $_POST['edit_sequence'];
    $sid=$_POST['sid'];

    $query = "UPDATE chapter SET sequence='$sequence' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: chapter.php?id='.$sid); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        
    }
}

if(isset($_POST['vchapter_updatebtn']))//video_chapter_edit
{
    $id = $_POST['edit_id'];
    $sequence = $_POST['edit_sequence'];
    $sid=$_POST['sid'];

    $query = "UPDATE v_chapter SET sequence='$sequence' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: v_chapter.php?id='.$sid); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        
    }
}
?>
