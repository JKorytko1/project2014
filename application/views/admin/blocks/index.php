<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php echo "ggg";exit();?>
<html>
	<head>
		<title>Панель управления</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body><?php
	echo $_SERVER['DOCUMENT_ROOT'];exit();
// include_once('blocks/header.php');
// include_once('blocks/menu.php');

$this->load->view($data['view'],$data);  

//include('block/footer.php');
 ?> 
