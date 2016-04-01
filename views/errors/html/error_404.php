<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<link rel="stylesheet" href="<?php echo CSS. 'bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo CSS. 'custom.css';?>">
<link rel="stylesheet" href="<?php echo CSS. 'startmin.css';?>"> 
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #2E3C54;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #fff;
	background-color: transparent;
	font-size: 50px;
	font-weight: 300;
	padding: 14px 15px 20px 15px;
}

p {
	color: #fff;
	font-size: 18px;
	font-weight: 200px;
}

p {
	margin: 12px 15px 12px 15px;
}

.btn {
	background: transparent;
	border: 2px solid #FF6347;
	margin: 0px 0px 0px 15px;
	color: #fff;
}

.btn:hover {
	background: #FF6347;
	color: #fff;
}
</style>
</head>
<body>
	<div class="container">
		<h1><?php echo $heading; ?></h1>
<?php echo $message; ?>
  <a href="" class="btn">Go home</a>
	</div>
</body>
</html>