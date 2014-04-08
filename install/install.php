<?php
include '../glob.php';
if($_POST){
			$context = '<?php '."\n";
			$context=$context.'define(\'ADMIN_PASSWORD\',\''.STR_ENCRYPT(trim($_POST['password'])).'\'); '."\n";
			$context=$context.' ?>';	
			file_put_contents('../glob/admin/config.php',$context);
			chmod('../glob/admin/config.php',0777);
			copy('indexA.php','../index.php');
					
	}


?>