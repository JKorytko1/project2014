 <?php include('block/header.php');?>
 <?php include('block/left-menu.php');?>

<script>
  function collapsElement(id) {
    if ( document.getElementById(id).style.display != "none" ) {
      document.getElementById(id).style.display = 'none';
    }
    else {
      document.getElementById(id).style.display = '';
    }
  }
</script>

<!--<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Кафедра "Системы и Процессы Управления"</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
 -->



 <!-- Навигация -->
  <!--<div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand">КАФЕДРА Системы и Процессы Управления</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="#">Новости</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">О кафедре <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="department.html">История кафедры</a></li>
                  <li><a href="teachers.html">Преподаватели</a></li>
                  <li><a href="speciality.html">Специальности</a></li>
                  <li><a href="#">Предметы</a></li>
              </ul>
              </li>
              <li><a href="#">Абитуриенту</a></li>
              <li><a href="conference.html">Конференции</a></li>
              <li><a href="contacts.html">Контакты</a></li>
          </ul>
        </div>      
      </div>
  </div>
  
    <p>
	<div class="container-fluid">
      <div class="row">
	   <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><h4>Научные и методические материалы</h4></li>
            <li><a href="#">Книги, методические пособия</a></li>
            <li><a href="#">Студенческие проекты</a></li>
            <li><a href="#">Статьи</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><h4>Студенту</h4></li>
            <li><a href="">Группы</a></li>
            <li><a href="gallery.php">Фотогалерея</a></li>
            <li><a href="">Профсоюз студентов</a></li>
          </ul>
          <ul class="nav nav-sidebar">
		    <li><h4>Ссылки на ресурсы</h4></li>
            <li><a href="http://ivit.freeforum.bz" target="_blank">Форум Technopages</a></li>
            <li><a href="http://myacademy.com.ua" target="_blank">Учебные материалы on line</a></li>
            <li><a href="http://grades.aasiutin.com" target="_blank">Электронная зачетка</a></li>
          </ul>
        </div>
	</div>
	</div>
		</p>
  -->
<div id="content">
    <div id="text">
      <table class="table table-striped">
      <thead>
        <tr>
          <th> Альбомы фотографий</th>
        </tr>
      </thead>
    <td> <p style="text-align:center"><a href="https://vk.com/album-73612507_204466707"><img src="photo/DF.jpg" height="150" width="200" />
День Факультета 2014</a></p> </td>
 <td> <p style="text-align:center"><a href="https://vk.com/album-73612507_204466707"><img src="photo/DF.jpg" height="150" width="200" />
День Факультета 2014</a></p> </td>
</tr>
    </div>
 
<body>

	<div align="center">
		<p><h1>Фотогалерея</p>
		<br><br><br>  

   <!-- Карусель -->
  <div id="carousel" class="carousel slide">
    <!— Индикаторы слайдов —>
        <ol class="carousel-indicators"> 
              <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
               <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
        </ol>
    <!— Слайды —>
    <div class="carousel-inner">
  
            <div class="item active">
      <center>
            <img src="photo/1.jpg" height="500" alt="">
      </center>
            <div class="carousel-caption"> 
    
            </div>
        </div>
  
            <div class="item">
        <center>
            <img src="photo/2.jpg" height="500" alt="">
      </center>
            <div class="carousel-caption">
    
            </div>
        </div>
    
            <div class="item">
      <center>
            <img src="photo/3.jpg" height="500" alt="">
      </center>
            <div class="carousel-caption">
      
            </div>
        </div>
    
           <div class="item">
      <center>
            <img src="photo/6.jpg" height="500" alt="">
      </center>
            <div class="carousel-caption">
        
            </div>
        </div> 

           <div class="item">
      <center>
            <img src="photo/8.jpg"  height="500"alt="">
      </center>
            <div class="carousel-caption">

            </div>
        </div> 
    </div>
    <!— Стрелки переключения слайдов —>
        <!--<a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        </a> -->
        <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

</div> 
<!--KARUSEL KONEC-->
   

 </div>

</body>


<!--<p style="text-align:center"><a href="https://vk.com/album-73612507_204466707"><img src="photo/DF.jpg" height="150" width="200" />
День Факультета 2014</a></p>
  <p style="text-align:center"><a href="https://vk.com/album-73612507_204466707"><img src="photo/DF.jpg" height="150" width="200" />
День Факультета 2014</a></p> -->

<!-- Подвал -->
  <div id="footer">
  <?php include('block/footer.php');?>
</div>
	