<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
  <head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    <!-- Title -->
    <title>Earth Savior - Build Society With Technology</title>

    <!-- Templates core CSS -->
    <link href="stylesheets/application.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="images/favicon/favicon.png" rel="shortcut icon">
    <link href="images/favicon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="images/favicon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/favicon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="114x114">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr Scripts -->
    <script src="javascript/vendor/modernizr-2.7.1.min.js"></script>
  </head>
  <body class="sign-in-up" id="to-top">

    <!-- Sign In/Sign Up section -->
    <section class="sign-in-up-section">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Logo -->
            <figure class="text-center">
              <a href="./index.html">
                <img class="img-logo" src="images/logo.png" alt="">
              </a>
            </figure> <!-- /.text-center -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->






        <section class="sign-in-up-content">

          <div class="row">

            <div class="col-md-12">

              <h4 class="text-center">Create an account</h4>
              <form class="sign-in-up-form" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" >
                
                <!-- Input 1 -->
                <div class="form-group">
                  <input class="form-control" id="displayname" name="displayname" type="text" placeholder="Your name">
                </div> <!-- /.form-group -->

                <!-- Input 2 -->
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Enter email address">
                </div> <!-- /.form-group -->

                <!-- Input 3 -->
                <div class="form-group">
                  <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                </div> <!-- /.form-group -->

                <!-- Input 4 -->
                <div class="form-group">
                  <input class="form-control" id="photoprofil" name="photoprofil" type="file" >
                </div> <!-- /.form-group -->

                <!-- Button -->
	 <input type="submit" name="submit" class="btn btn-success btn-block" value="Submit Form">
                <!-- Checkbox -->
                <section class="text-center">
                  <div class="checkbox">
                    <label>
                    </label>
                  </div> <!-- /.checkbox -->
                </section> <!-- /.text-center -->

                <!-- Sign In/Sign Up links -->
                <section class="sign-in-up-links text-center">
                </section> <!-- /.sign-in-up-links -->
                
              </form> <!-- /.sign-in-up-form -->
              
            </div> <!-- /.col-md-12 -->

          </div> <!-- /.row -->
          
        </section> <!-- /.sign-in-up-content -->




        <div class="row">

          <div class="col-md-12">

            <section class="footer-copyright text-center">

              <p>Made with <i class="fa fa-heart"></i> by Codelabs.</p>
              
            </section> <!-- /.footer-section -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
        
      </div> <!-- /.container -->

    </section> <!-- /.sign-in-up-section -->
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>
    
<?php
if(isset($_POST['submit'])) 
{ 
		include('koneksi.php');
       $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        // selecting database
        mysql_select_db(DB_DATABASE);	
		
		$email=$_POST['email'];
		$displayname=$_POST['displayname'];
		$password=$_POST['password'];
		$photoprofil=$_FILES['photoprofil']['name'];
		define('GW_UPLOADPATH', 'images/picprofil/');
		$target=GW_UPLOADPATH.$photoprofil;
		if(($email=="")&&($displayname=="")&&($password=="")){
			
		}else
		if(($email=="")||($displayname=="")||($password=="")){
			echo '<script type="text/javascript">alert("Ada field yang tidak di isi");</script>';			
		}else
		if (($_FILES['photoprofil']['type']!="image/jpeg")&&($_FILES['photoprofil']['type']!="image/png")){
			echo '<script type="text/javascript">alert("File yang diterima hanya JPEG dan PNG");</script>';
		}else
		if($_FILES['photoprofil']['size']>=500000){
			echo '<script>   window.alert("Ukuran file tidak boleh lebih dari 500 KB");</script>';
		}else{
		$sql="select * from user where email= '$email'";
		$res=mysql_query($sql);
		$row=mysql_num_rows($res);
		if($row!=0){
			echo '<script>   window.alert("Email sebelumnya telah terdaftar.");</script>';			
		}else{
		if(move_uploaded_file($_FILES['photoprofil']['tmp_name'], $target)){
				$sql="insert into user values('0','$email','$password','$displayname','0','$photoprofil','0')";
				$res=mysql_query($sql);
				echo '<script type="text/javascript">alert("Pendaftaran sukses");</script>';
		  }
		}
	  }
}
       ?>
  </body>
</html>
