<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ST. MARY'S SCHOOL, BUXAR</title>
<link rel = "icon" href="icon.png" type = "image/x-icon">  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--slider-->

<style type="text/css">

/* CODE FOR TOP CONTACT FIXED BAR START */
nav {
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 100%;
  background-color:#003C77;
  height: 55px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: .2em 2em;
  float: right;
}

nav ul li {
  display: inline-block;
  margin: 0;
  padding: .2em .7em;
}

nav a {
  width: 100%;
  height: 100%;
  color: white;
  text-decoration: none;
  font-family: Ubuntu;
  font-size: 1.15em;
  font-weight: lighter;
  letter-spacing: 1px;
  transition: .25s ease-in-out;
}
nav a:link {
color:white;}

nav a:hover {
  color: yellow;
}

.nav-bg {
  content:'';
  position: absolute;
  display: block;
  top: -100%;
  width: 100%;
  height: 100%;
  z-index: -1;
  background: red;
  background-color:#00FFCC;
  transition: .45s ease-in-out;
}
/* CODE FOR TOP CONTACT FIXED BAR END */

#apDiv1 {
  position: absolute;
  left: 650px;
  top: 50px;
  width: 180px;
  height: 46px;
  z-index: 1;
}
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  text-align:center;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
.button {
  padding: 30px 40px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fffff;
  background-color: #4CAF50;
  border: none;
  margin:10px;
  border-radius: 10px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.style8 {
  font-size: 36px;
  color: #0000A0;
  font-weight: bold;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.style1 {font-size: 100px}
.style2 {font-size: 36px; }
</style>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<!------ FOR MOBILE NO. START------------>
<nav>
  <div class="nav-bg"></div>
  <ul>
    <li><a href="tel:+91-9709917591">&#128222; +91-9709917591</a></li>
    <li><a href="mailto:stmarysbxr@gmail.com">📧 stmarysbxr@gmail.com</a></li>
   
  </ul>
</nav>
<!------ FOR MOBILE NO. END------------>


<div class="btm_border">
<div class="h_bg" style='background:#fff;'>
<div class="wrap">
      <div class="header">    <span class="style1"></span>
           <div class="logo"></div>
  </div>
    
      <div class='h_btm'>
  
      
      <ul>
          <li class='active' style="margin-top:45px;"><a><span><font size="+3"><img src="images/BR1.png"></font></span></a></li>
         
        <div class="clear"></div>
      </ul>
  
      
<div class="clear"></div>
  </div>
</div>
</div>
</div>
    
  <div class='h_btm'>
    <div class='cssmenu'>
     <ul>
			    <li class='active'><a href='index.php'><span>Home</span></a></li>
			    <li class='active'><a href='about.html'><span>About Us</span></a></li>
			    <li class='active'><a href='PROSPECTUS.html'><span>Prospectus</span></a></li>
			    <li class='active'><a href='gallery.html'><span>Gallery</span></a></li>
			    <li class='active'><a href="#contactus"><span>Contact Us</span></a></li>
			 	<div class="clear"></div>
		  </ul>
  </div>
      
<div class="clear"></div>
</div>
    
<!--main-->
<div class="main_bg">
<div class="wrap">
<div class="main">
  <div class="header">
    <div class="content">
               <div class="style2"> 
                 <div align="center">APPLY FOR JOB</div>
               </div>     
      </div>
    </div>
</div>
</div>
</div>

<P align="center">
	
                    					<?php
                    					if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    					{?>
                        				<script type='text/javascript'>alert('<?php echo $_SESSION['status'];?>');</script>
                        				<?php unset($_SESSION['status']);
                    					}
               						 ?>
               						
</BR></BR></BR>
<div class='mx-auto w-50'>
<form method='post' action='code.php' enctype="multipart/form-data">
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFname">First Name</label>
      <input type="text" class="form-control" name="fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputLname">Last Name</label>
      <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="Mobile">Mobile No.</label>
      <input type="text" class="form-control" name="phone" placeholder="Mobile Number">
    </div>
  </div>
	<div class="form-group">
    <label for="inputAddress">Apply For Postion</label>
    <input type="text" class="form-control" name="post" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select name='state' class="form-control">
        <option value="" selected>Choose...</option>
        <option value='Arunachal Pardesh'>Arunachal Pardesh</option>
		  <option value='Andhra Pardesh'>Andhra Pardesh</option>
		  <option value='Andmaan & Nicobar'>Andmaan & Nicobar</option>
		  <option value='Assam'>Assam</option>
		  <option value='Bihar'>Bihar</option>
		  <option value='Chhattisgarh'>Chhattisgarh</option>
		  <option value='Chhandigarh'>Chhandigarh</option>
		  <option value='Delhi'>Delhi</option>
		  <option value='Goa'>Goa</option>
		  <option value='Gujrat'>Gujrat</option>
		  <option value='Haryana'>Haryana</option>
		  <option value='Himachal pardesh'>Himachal pardesh</option>
		  <option value='Jammu & Kashmir'>Jammu & Kashmir</option>
		  <option value='Jharkhand'>Jharkhand</option>
		  <option value='Kharnataka'>Kharnataka</option>
		  <option value='Kerala'>Kerala</option>
		  <option value='Ladakh'>Ladakh</option>
		  <option value='Lakshadweep'>Lakshadweep</option>
		  <option value='Madhya Pardesh'>Madhya Pardesh</option>
		  <option value='Maharashtra'>Maharashtra</option>
		  <option value='Manipur'>Manipur</option>
		  <option value='Meghalaya'>Meghalaya</option>
		  <option value='Mizoram'>Mizoram</option>
		  <option value='Nagaland'>Nagaland</option>
		  <option value='Pondicherry'>Pondicherry</option>
		  <option value='Odisha'>Odisha</option>
		  <option value='Punjab'>Punjab</option>
		  <option value='Rajasthan'>Rajasthan</option>
		  <option value='Sikkim'>Sikkim</option>
		  <option value='Tamil Nadu'>Tamil Nadu</option>
		  <option value='Telangana'>Telangana</option>
		  <option value='Tripura'>Tripura</option>
		  <option value='Uttarakhand'>Uttarakhand</option>
		  <option value='Uttar Pardesh'>Uttar Pardesh</option>
		  <option value='West Bengal'>West Bengal</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Pin</label>
      <input type="text" class="form-control" name="inputZip">
    </div>
  </div>
	<div class="form-group">
    <label for="about u">Tell us about you</label>
		<textarea class="form-control" style='resize:none;' rows="4" name="About" ></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFname">Upload Resume</label>
      <input type="file"  name="resume" class='form-control'>
    </div>
    <div class="form-group col-md-6">
      <label for="inputLname">Upload Photo</label>
      <input type="file"  name="photo">
    </div>
  </div>
	<div class="form-group">
    
      
      <label class="form-check-label" for="gridCheck">
		  If Already Apply, <a href="search.php">Check Status</a>
      </label>
    
  </div>
	<button type="submit" name="apply" class="btn btn-primary">Apply </button>
</form>
</div>
</P>
<form method="get" action="class.php">
    <input type="hidden" name="id" value="<?php $row;?>">
    
    <input type="submit" style="color: transparent; background-color: transparent; border-color: transparent;">
</form>
 <div class="main_bg">
<div class="wrap">
<div class="main">
  <div class="header">
    <div class="content">
               <div class="style2"> 
                
               </div>     
      </div>
    </div>
</div>
</div>
</div>                  


<!--footer-->
<div class="footer-bg"> 

<div class="wrap">
<div class="footer">
<h2 align="center">CONTACT US</h2>
<div class="box1" style=margin-bottom:10px;>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1799.7327781449844!2d83.9609914!3d25.5561735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3992758af5f1edaf%3A0x77408800c9d38c75!2sSt.Mary&#39;s%20School%20(English%20Medium)!5e0!3m2!1sen!2sin!4v1587663013172!5m2!1sen!2sin" width="400" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  
  <div class="box1">
    <h4 class="btm"><a id="contactus">Get in touch</a></h4>
    <div class="box1_address">
      <p>ST. MARY'S SCHOOL</p>
      <p>NAI BAZAR, NEAR GOVT. ITI, BUXAR</p>
      <p>BIHAR-802101</p>
      <P><a href="tel:+91-9709917591">&#128222; +91-9709917591</a></P>
            <P><a href="tel:+91-7667747169">&#128222; +91-7667747169</a></P>
        <P><a href="mailto:stmarysbxr@gmail.com">📧 stmarysbxr@gmail.com</a></P>
      </div>
  </div>
     <div class="box1"><a href="#top"><img src="logo1.jpg" width="200" height="200" align="left"></a></div>
     </div>
     
  <div class="clear"></div>     
</div>
</div>
</div>
<!--footer1-->
<div class="ftr-bg">
  <div class="wrap">
    <div class="footer">
    <div class="copy">
      <p class="w3-link">© All Rights Reserved | Design by&nbsp; SILICON COMPUTERS, BUXAR</a></p>
    </div>
    <div class="clear"></div> 
  </div>
  </div>
</div>
</body>
</html>