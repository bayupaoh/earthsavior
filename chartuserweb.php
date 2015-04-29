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
    <title>Earth Savior - Save Our Future and Be Savior</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Templates core CSS -->
    <link href="stylesheets/application.css" rel="stylesheet">

    <!-- Favicons -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr Scripts -->
    <script src="javascript/vendor/modernizr-2.7.1.min.js"></script>
  </head>
  <body class="index" id="to-top">

    <section class="subscribe-section" id="section-3">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Title -->
            <h2>Ranking Earth Savior</h2>

            <!-- Subscribe form -->
            <div class="row">

            <!--  <div class="col-md-6 col-md-offset-3 col-subscribe">-->

					    <div class="container">
      <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Photo</th>
            <th>Display Name</th>
            <th>Point</th>
			</tr>
        </thead>
        <tbody>
		<?php
          include('koneksi.php');
          $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		  mysql_select_db(DB_DATABASE);
	      $sql="select * from user order by point desc";
		  $res=mysql_query($sql);
		  $i=0;
		  while($user=mysql_fetch_array($res)){
		  $i++;
		  echo'<tr><th>',$i,'</th><th><img src="./images/picprofil/',$user["photo_profile"],'"width="50px" height="50px" class="img-circle"></th><th>',$user["displayname"],'</th><th>',$user["point"],'</th></tr>';
		  }
		?>
        </tbody>
      </table>
      </div>
    </div>


                <section class="subscribe-description">

                  <p>Save Future and Be Earth Savior</p>
                  
                </section> <!-- /.subscribe-description -->

<!--              </div> <!-- /.col-md-6 -->

            </div> <!-- /.row -->
            
          </div> <!-- /.col-md-12 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </section> <!-- /.subscribe-section -->




    <!-- Footer -->
    <footer class="footer-section" role="contentinfo">

      <div class="container">

        <div class="row">

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p>Made with <i class="fa fa-heart"></i> by Codelabs.</p>
            </section>

            <script>var addthis_config = {"data_track_addressbar":true};</script>
            <script src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-533f6ac03b59c72a"></script>

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer col-padding">
            
            <!-- Footer 1 -->
            <section class="text-center">
              <p>Kirim kritik atau saran ke :</p>
            </section>

            <!-- Social media links -->
            <ul class="social-media-links">

              <li><a class="fa fa-twitter tw" href="https://twitter.com/unikomcodelabs"></a></li>
              <li><a class="fa fa-facebook fb" href="https://www.facebook.com/unikom.codelabs"></a></li>
              
            </ul> <!-- /.social-media-links -->

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p><strong>DIVISI CODELABS</strong> <br>JL. Dipatiukur No.120 <br>Bandung, Jawa Barat.</p>
            </section>

          </div> <!-- /.col-md-4 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </footer> <!-- /.footer-section -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>
  </body>
</html>