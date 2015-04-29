<?php
		include('koneksi.php');
       $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        // selecting database
     
        mysql_select_db(DB_DATABASE);
        $email=isset($_POST['email'])?$_POST['email']:null;
        $password=isset($_POST['password'])?$_POST['password']:null;
        
        $sql="select * from user where email= '$email' and password='$password' ORDER BY id LIMIT 1";
		$res=mysql_query($sql);
		$row=mysql_num_rows($res);
		$user=mysql_fetch_array($res);
        if($row != 0){
		    $response["success"] = 1;
            $response["user"]["email"] = $user["email"];
            $response["user"]["password"] = $user["password"];
            $response["user"]["displayname"] = $user["displayname"];
            $response["user"]["point"] = $user["point"];
			$response["user"]["photo"] = $user["photo_profile"];
			$response["user"]["jarak"] = $user["jarak"];
			$point=$user["point"];
			$sql="SELECT count(distinct(point))+1 as 'chart' FROM user where email != '$email' and point>'$point' ORDER BY point DESC  ";
			$res=mysql_query($sql);
			$user=mysql_fetch_array($res);		
			$response["user"]["chart"] = $user["chart"];
            json_encode($response);
            echo json_encode($response); 
		}else{
			$response["success"]=0;
			json_encode($response);
			echo json_encode($response);
		}
?>
