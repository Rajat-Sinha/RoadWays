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
		 <div class="row thumbnail text-center" style="margin-top:-10px;font:20px bold tahoma;background-image:url('images/m7.jpg')">
		   <h1 style="text-align:center;border:1px solid darkslategray;border-radius:1000px;background-color:black;color:white;">MAIN OFFICE</h1>
		   <P>Slag road,<br />
			Howrah Bridge,<br />
			Near Refujee Colony,<br />
			Sakchi, Jamshedpur<br />
			Pin code:- 831001<br />
			E-mail:- mandeeproadways@gmail.com<br />
			Mobile no.:- 7654443111, 8873211111
			</p>
		</div>
		<div class="row thumbnail" style="margin-top:-10px;background-image:url('images/m7.jpeg')">
		   <!--FORM-->
		   <?php
		     if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
				 $name=$_POST['name'];
				 $email=$_POST['email'];
				 $subject=$_POST['subject'];
				 $message=$_POST['message'];
				 if(!empty($name) && !empty($email)  && !empty($message)){
						$to='mandeeproadways@gmail.com';
						$body=$name."\n".$message;
						$headers='From: '.$email; 
						if(@mail($to,$subject,$body,$headers)){
						  echo '<script type="text/javascript">bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">Thanks For Conacting Us Mail has been sent</p> ");	</script>';
						}else{
							echo '<script type="text/javascript">bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">Mail could not be sent,Try next time</p> ");	</script>';
						}
				 }else{
					 echo '<script type="text/javascript">bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">Field marked with * are mandatory </p> ");	</script>';
				 }
			 }
		   
		   ?>
		   <form role="form" action="contact.php" method="POST">
			 <div class="form-group ">
			   <label for="username">NAME:<i class="fa fa-star" style="font-size:10px;color:black;"></i></label>
			   <input type="text" class="form-control" name="name" placeholder="Enter your Name">
			 </div>
			 <div class="form-group">
			   <label for="email">Email:<i class="fa fa-star" style="font-size:10px;color:black;"></i></label>
			   <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
			 </div>
			 <div class="form-group">
			   <label for="subject">Subject:</label>
			   <input type="text" class="form-control" name="subject" placeholder="Enter The Subject">
			 </div>
			 <div class="form-group">
			   <label for="message">Message:<i class="fa fa-star" style="font-size:10px;color:black;"></i></label>
			   <textarea class="form-control" name="message" placeholder="Enter Your Message" rows="6" cols="40"></textarea>
			 </div>
			 <button type="submit" class="btn btn-info">Send Us Message</button>
		   </form>
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
