<?php header('Content-Type: text/html; charset=utf-8'); ?>
<html>
	<head>
		<title>Панель управления</title>
		<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?=base_url();?>css/admin.css">
	</head>

	<body>
		<?php
 			include_once('blocks/header.php');
			include_once('blocks/menu.php');

			$this->load->view($data['view'],$data);  

//include('block/footer.php');
 ?> 
