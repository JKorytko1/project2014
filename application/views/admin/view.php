<?php header('Content-Type: text/html; charset=utf-8'); ?>

<html>
	<head>
		<title>Панель управления</title>
  		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo "$base/$css"?>">
	</head>

	<body>
		<?php $this->load->view('header_view'); ?>

		<div class="container-fluid">
			<div class="row">
				<?php 
					$this->load->view('menu_view'); 
					$this->load->view('news_view'); 
				?>
			</div>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>