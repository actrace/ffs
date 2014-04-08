<?php
if(!file_exists("glob/admin/config.php")){
	Header("Location:install/index.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FSS MINI</title>
</head>
<body>
<p>看来你似乎已经安装过此程序，如需重新安装，请删除glob/admin/config.php。</p>
</body>
</html>