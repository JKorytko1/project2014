<!DOCTYPE html><!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
<head>
  <meta charset=utf-8 />
  <title>Кафедра "Системы и Процессы Управления"</title>
  <link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url();?>css/style.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="<?=base_url();?>js/bootstrap.min.js"></script>

  <style type="text/css">
      .myButton1 { padding-left: 200px; padding-top: 15px; }
      .myButton2 { padding-left: 5px; padding-top: 15px; }
  </style>

</head>
<body>
  <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
          <a href="<?=base_url();?>index.php" class="navbar-brand">КАФЕДРА Системы и Процессы Управления</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="<?=base_url();?>index.php/news">Новости</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">О кафедре <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?=base_url();?>index.php/department.php">История кафедры</a></li>
                  <li><a href="<?=base_url();?>index.php/teachers.php">Преподаватели</a></li>
                  <li><a href="<?=base_url();?>index.php/speciality.php">Специальности</a></li>
                  <li><a href="<?=base_url();?>index.php/discipline.php">Предметы</a></li>
              </ul>
              </li>
              <li><a href="<?=base_url();?>index.php/abiturient.php">Абитуриенту</a></li>
              <li><a href="<?=base_url();?>index.php/conference.php">Конференции</a></li>
              <li><a href="<?=base_url();?>index.php/contacts.php">Контакты</a></li>
                <!-- <li><a class="btn btn-xs btn-default" href="<?=base_url()."index.php/ru/".basename($_SERVER['PHP_SELF'])?>" role="button">Рус</a></li>
                <li><a class="btn btn-xs btn-default" href="<?=base_url()."index.php/ua/".basename($_SERVER['PHP_SELF'])?>" role="button">Укр</a></li> -->
              
              <li class="myButton1"><button type="button" class="btn btn-xs btn-primary" onClick='location.href="<?=base_url()."index.php/ru/".basename($_SERVER['PHP_SELF'])?>"'>Рус</button></li>
              <li class="myButton2"><button type="button" class="btn btn-xs btn-primary" onClick='location.href="<?=base_url()."index.php/ua/".basename($_SERVER['PHP_SELF'])?>"'>Укр</button></li>
          </ul>
        </div>      
      </div>
  </div>