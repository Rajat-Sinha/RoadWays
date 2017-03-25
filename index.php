<!-- Website  Created by  Rajat Kumar Sinha(2k15)batch Metallurgical and Materials
	Engineering Student of National Institute of Technology, Jamshedpur. For Further 
	information about website contact or mail at +917762960235" or sinharajat.858@gmail.com" 
-->
<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Mandeep Roadways</title>
   <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
   <link rel="stylesheet" href="css/style.css">
   <?php @require '_inc_/Head.inc.php';?>
 </head>
 <body style="background:url('images/road.jpg') fixed;width:100% ;height:100%;">
   <div class="row">
     <div class="col-md-2"></div>
	 <div class="col-md-8">
	   <nav class="navbar navbar-inverse" style="border:40px solid cadetblue;">
			<div class="container-fluid">
			  <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav" style="margin-left:130px;">
						<li ><a href="index.php" style="color:white;font:20px bold tahoma;">Home</a></li>
						<li><a href="about.php" style="color:white;font:20px bold tahoma;">About Us</a></li>
						<li><a href="services.php" style="color:white;font:20px bold tahoma;">Services</a></li>
						<li><a href="contact.php" style="color:white;font:20px bold tahoma;">Contact Us</a></li>
			  </div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
        </nav>
		<div style="margin-top:-10px;">
		  <div class="well row" style="padding:30px;padding-top:30px;background-color:darkgray;color:white;">
			   <div class="col-md-2"><img src="images/logo.png" class="img-circle" style="height:80px;"></div>
			   <div class="col-md-10"><span style="font:54px bold tahoma;padding-top:30px;color:cornsilk;">Mandeep Roadways </span><br><text style="font:24px bold tahoma;padding-top:30px;font-style:oblique;">The Name You Can Trust.... </text></div>
		  </div>
		</div>
		<div class="thumbnail" style="margin-top:-40px;background-color:darkgray;"><img src="images/main.png" style="height:220px;"></div>
		<div class="row thumbnail " style="margin-top:-10px;background-image:url('images/road1.jpg');">
		  <div class="col-md-8 " style="border:1px solid darkslategray;background-color:darkslategray;padding:30px 30px 0px 30px;background:url('images/m1.jpg') fixed;border-radius:50px;color:darkslategray">
		    <h3 style="text-align:center;border:1px solid darkslategray;border-radius:1000px;background-color:black;color:white;">Welcome to Mandeep Roadways</h3>
			<p>Mandeep Roadways is the trusted name for transporting in India. We cover every area of Uttar Pradesh, Uttarakhand, Delhi, Punjab and Odisha. Its wide network coupled with sincere and timely deliveries serves a magnitude of customers which include major public and private sector companies, multinationals, large, medium and small scale industries and a large trading community.</p>
		  </div>
          <div class="col-md-4 " style="border:1px solid darkseagreen;background-color:darkseagreen;padding:10px 30px 0px 30px;background:url('images/m2.jpg') fixed;border-radius:10px;color:darkgreen;">
		    <h3 style="text-align:center;border:1px solid darkslategray;border-radius:1000px;background-color:black;color:white;">Contact Us</h3>
            <div>
                <p>R.K.TIWARY:09431760805, 07654443111</p>
                <p>MANDEEP TIWARY: 08873211111</p>
                <p>Email: mandeeproadways@gmail.com</p>
        	</div>
		  </div>		  
		</div>
		<?php 
          if(isset($_POST['userid']) && isset($_POST['password'])){
			  $userid=$_POST['userid'];
			  $password=$_POST['password'];
			  if(!empty($userid) && !empty($password)){
				  $mysql_host='localhost';
				  $mysql_user='root';
				  $mysql_pass='';
				  $mysql_db='roadways';
				  if(@mysql_connect($mysql_host,$mysql_user,$mysql_pass) && @mysql_select_db($mysql_db)){
					$query="SELECT `id` FROM `customer_login` ORDER BY `id`";
				  if($query_run=mysql_query($query)){
					 if(mysql_num_rows($query_run)==0){
						 echo '<script type="text/javascript">bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">Invalid userId And Password</p> ");	</script>';
					 }else if(mysql_num_rows($query_run)==1){
						 echo '<script type="text/javascript">bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">Login Successfully</p> ");	</script>';
					 }
				  }
				  }else{
					  die('<script type="text/javascript">bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">Could not conect to database and server</p> ");	</script>');
				  }
			  }else{
				  echo '<script type="text/javascript">bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">All Fields Are Required..</p> ");	</script>';
			  }
		  }
		  
		?>
		<div class="row thumbnail" style="margin-top:-10px;background-image:url('images/m3.jpg')">
		 <div class="col-md-3"></div>
		 <div class="col-md-6">
		   <h3 style="font:40px bold  tahoma;text-align:center;border:1px solid darkslategray;border-radius:1000px;background-color:black;color:white;">Customer Login</h3>
		   <form role="form" action="index.php" method="POST">
			 <div class="form-group form-inline">
			   <label for="userid" style="font:20px bold tahoma;">USER ID:</label>
			   <input type="text" class="form-control" placeholder="userid" name="userid">
			 </div>
			 <div class="form-group form-inline">
			   <label for="pwd" style="font:20px bold tahoma;">PASSWORD:</label>
			   <input type="Password" class="form-control" placeholder="Password" name="password">
			 </div>
			 <button type="submit" class="btn btn-success">LOGIN</button>
          </form>
		 </div>
		 <div class="col-md-3"></div>
		 
		</div>
		<div class="row thumbnail" style="padding:30px 30px 10px 30px;background-color:darkgrey;margin-top:-10px;">
		  <div class="col-md-2"></div>
		  <div class="col-md-8" style="font:20px bold tahoma;">
		    <p><a href="index.php" style="color:white;text-decoration:none;">Home</a> | <a href="about.php" style="color:white;text-decoration:none;">About US</a> | <a href="services.php" style="color:white;text-decoration:none;">Services</a> | <a href="contact.php" style="color:white;text-decoration:none;">Contact Us</a></p>
		  </div>
		  <div class="col-md-2"></div>
		</div>
		<div class="row thumbnail" style="background-color:black;color:white;padding:20px;margin-top:-10px;">
		  <div class="col-md-6"><p>Copyright &copy; 2014 MANDEEP ROADWAYS</p></div>
		  <div class="col-md-2"></div>
		  <div class="col-md-4"><p><a href="metadata.smes.co.in/rajatsinha.php" style="color:white;text-decoration:none;">Made By Rajat Kumar SInha</a></p></div>
		</div>
	 </div>
	 <div class="col-md-2"></div>
   </div>
 </body>
</html>