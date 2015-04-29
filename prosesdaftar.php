<?php
		include('koneksi.php');
       $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        // selecting database
        mysql_select_db(DB_DATABASE);	
    
		$email=$_POST['email'];
		$displayname=$_POST['displayname'];
		$password=$_POST['password'];
		$photoprofil=$_FILES['photoprofil']['name'];
		define('GW_UPLOADPATH', './images/picprofil/');
		$target=GW_UPLOADPATH+$photoprofil;
		echo $photoprofil;
		
		if(move_uploaded_file($_FILES['photoprofil']['tmp_name'], $target)){
				$sql="insert into user values('0','$email','$password','$displayname','0','$photoprofil')";
				$res=mysql_query($sql);
				echo '<img src="'$target'" alt="percobaan">';
		}
       ?>
