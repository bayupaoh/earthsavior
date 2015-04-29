<?php
		include('koneksi.php');
       $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        mysql_select_db(DB_DATABASE);
        $sql="select * from user order by point desc";
		$res=mysql_query($sql);
		$row=mysql_num_rows($res);
		$cacah=0;
		//$user=mysql_fetch_array($res);
		
		$return_arr = array();
		
		//echo '{"user": [';
		while($user=mysql_fetch_array($res)){
            $response["displayname"] = $user["displayname"];
            $response["point"] = $user["point"];
            $response["profile"] = $user["photo_profile"];
            array_push($return_arr,$response);
            //json_encode($response);
            //echo json_encode($response); 
            //$cacah++;
		}
			$response2['user']=$return_arr;
            echo json_encode($response2);
		//echo ']}';
	/*	while($cacah<=$row-1){
			$item=array('displayname'=>$data['displayname'],'point'=>$data['point'],'photo'=>$data['photo_profile']);
			$cacah++;
		}
		$json=array('android'=>$item);
		echo json_encode($json);*/
?>