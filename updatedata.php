<?php
	   include('koneksi.php');
       $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
       mysql_select_db(DB_DATABASE);
       $email=isset($_POST['email'])?$_POST['email']:null;
       $point=isset($_POST['point'])?$_POST['point']:null;
       $jarak=isset($_POST['jarak'])?$_POST['jarak']:null;
       $sql="update user set point='$point',jarak='$jarak' where email='$email' ";
       $res=mysql_query($sql);
	   if($res){
		  $response["success"] = 1;
		  echo json_encode($response);
	   }else{
		   		  $response["success"] = 0;
		  echo json_encode($response);
	   }

?>