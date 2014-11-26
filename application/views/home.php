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
            <img src="<?=base_url();?>assets/images/001.jpg" width="100%" alt="">
			</center>
            <div class="carousel-caption"> 
            </div>
        </div>
	
        <div class="item">
		    <center>
            <img src="<?=base_url();?>assets/images/002.jpg" width="100%" alt="">
			</center>
            <div class="carousel-caption">
            </div>
        </div>
		
        <div class="item">
			<center>
            <img src="<?=base_url();?>assets/images/003.jpg" width="100%" alt="">
			</center>
            <div class="carousel-caption">
            </div>
        </div>
		
        <div class="item">
			<center>
            <img src="<?=base_url();?>assets/images/004.jpg" width="100%" alt="">
			</center>
            <div class="carousel-caption">
            </div>
        </div>

        <div class="item">
			<center>
            <img src="<?=base_url();?>assets/images/005.jpg" width="100%" alt="">
			</center>
            <div class="carousel-caption">
            </div>
        </div>	
    </div>
	
    <!— Стрелки переключения слайдов —>
        <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

	<!-- Контент -->
	<div class="jumbotron">
      <div class="container">
        <h1>Системы и Процессы Управления</h1>
        <p>
        В Национальном техническом университете “Харьковский политехнический институт” насчитывается около 30 кафедр, каждая из которых имеет свои достижения и традиции. Но есть среди них такие, которые определили целую эпоху в жизни факультета и университета в целом, развитие передовых специальностей, создание научных школ. Именно такой и является кафедра “Системы и процессы управления”.
        </p>
        <p><a href="<?=base_url();?>index.php/department.php" class="btn btn-primary btn-lg" role="button">Узнать больше »</a></p>
      </div>
    </div>
	
    <div class="container" id="news">
        <div class="row">
            <div class="col-md-12">
                <h2 class="blog-post-title">Изменения графика учебного процесса</h2>
                <p class="blog-post-meta">Октябрь 21, 2014 by Admin</a></p>
                <p align="justify"><big>В 2014–2015 учебный год внесены некоторые изменения отдельных 
                   элементов графика учебного процесса. Однако эти изменения не коснутся количества отведенного 
                   для учебы времени и не повлияют на качество учебного процесса. То есть, количество часов останется прежним: 
                   16 недель лекционных и практических занятий с понедельника по пятницу. Суббота останется выходным днем.
                   <a href="<?=base_url();?>index.php/news.php"> Читать далее</a></big></p>
               
                <h2 class="blog-post-title">Товажнянский продолжает свою работу в должности ректора</h2>
                <p class="blog-post-meta">Октябрь 21, 2014 by Admin</a></p>
                <p align="justify"><big>Профессор Товажнянский Леонид Леонидович продолжает свою работу в должности 
                ректора Национального технического университета «Харьковский политехнический институт». После окончания 
                очередного срока (контракта) 19 января 2015 года будет объявлен конкурс на замещение должности ректора 
                Национального технического университета «Харьковский политехнический институт» в соответствии с действующим
                 законодательством Украины.<a href="<?=base_url();?>index.php/news.php"> Читать далее</a></big></p>
               
                <ul class="blog-main pager">
                    <br>
                    <li><a href="<?=base_url();?>index.php/news.php" >Читать все новости</a></li>
                </ul>
	        </div>
        </div>
    </div>

