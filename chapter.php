<!DOCTYPE HTML>
<html>
<head>
<title>ST. MARY'S SCHOOL, BUXAR</title>
<link rel = "icon" href="icon.png" type = "image/x-icon">  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--slider-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VRDX82N1GZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VRDX82N1GZ');
</script>
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
<div class="h_bg">
<div class="wrap">
      <div class="header">    <span class="style1"></span>
           <div class="logo"></div>
  </div>
    
      <div class='h_btm'>
  
      
      <ul>
          <li class='active' style="margin-top:45px;"><a><span><font size="+3"><img src="BR1.png"></font></span></a></li>
         
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

		<?php
    $con = mysqli_connect('sg2nlmysql23plsk.secureserver.net','stmarys','Stmarys@1234','ph10985541241_stmary');


    $id = $_GET['id'];
		
    $query="Select * from chapter where sid=$id order by sequence";
    $query_run=mysqli_query($con,$query);
	$sql="Select subject from subject where id='$id'";
	$query_run1=mysqli_query($con,$sql);
	$row1=mysqli_fetch_assoc($query_run1);
	
?>
               <div class="style2"> 
                 <div align="center"><?php echo $row1['subject'];?></div>
               </div>     
      </div>
    </div>
</div>
</div>
</div>

<P align="center">
</BR></BR></BR>

<?php
    if(mysqli_num_rows($query_run)>0)
          {
            while($row= mysqli_fetch_assoc($query_run))
               
			{
                ?>

<button class="button"><a href="admin/<?php echo $row['file'];?>" target="_blank" style="color:darkblue;"><?php echo $row['chapter'];?></a> </button>
<?php


			}
} else
{
  Echo 'NO CHAPTER FOUND';
}
?>
</P>

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
      <p class="w3-link">© All Rights Reserved | Design by&nbsp; SILICON COMPUTERS, BUXAR</p>
    </div>
    <div class="clear"></div> 
  </div>
  </div>
</div>
</body>
</html>