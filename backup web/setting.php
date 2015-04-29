<?php
	   include('koneksi.php');
       $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
       mysql_select_db(DB_DATABASE);
       $email=isset($_POST['email'])?$_POST['email']:null;
       $password=isset($_POST['password'])?$_POST['password']:null;
       $displayname=isset($_POST['displayname'])?$_POST['displayname']:null;
       $emailama=isset($_POST['emaillama'])?$_POST['emaillama']:null;
       $passlama=isset($_POST['passlama'])?$_POST['passlama']:null;
              
       $sql="update user set displayname='$displayname',email='$email',password='$password' where email='$emailama' and password='$passlama'";

       $res=mysql_query($sql);

	   if($res){
		  $response["success"] = 1;
		  echo json_encode($response);
	   }else{
		   		  $response["success"] = 0;
		  echo json_encode($response);
	   }

?>
