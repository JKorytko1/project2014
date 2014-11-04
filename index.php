 <?php include('block/header.php');?>
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
            <img src="image/001.jpg" alt="">
			</center>
            <div class="carousel-caption"> 
		<p> 
		<h1>
		<font color="#FFFFFF">
		Кафедра Cистем и процессов управления (до 2001 года — автоматического управления движением) была создана в 1964 году в связи с актуальными потребностями технического прогресса.
		</font>
		</h1>
		</p>
            </div>
        </div>
	
            <div class="item">
		    <center>
            <img src="image/002.jpg" alt="">
			</center>
            <div class="carousel-caption">
		<p> 
		<h1>
		<font color="#FFFFFF">
        Студенты, обучающиеся по специальности Информатика, изучают не только информационные технологии, но и различные математические курсы, такие как Математический анализ, Теория вероятностей и другие.
		</font>
		</h1>
		</p>
            </div>
        </div>
		
            <div class="item">
			<center>
            <img src="image/003.jpg" alt="">
			</center>
            <div class="carousel-caption">
        <p> 
		<h1>
		<font color="#FFFFFF">
        Полученное студентами инфиза фундаментальное образование по математическим и компьютерным дисциплинам вот уже не один десяток лет позволяет им стать специалистами высокой квалификации с мощным творческим потенциалом.
		</font>
		</h1>
		</p>
            </div>
        </div>
		
            <div class="item">
			<center>
            <img src="image/004.jpg" alt="">
			</center>
            <div class="carousel-caption">
        <p> 
		<h1>
		<font color="#FFFFFF">
        Профилизация подготовки будущих специалистов, принятая на кафедре - «Информационное обеспечение систем управления реального времени».
		</font>
		</h1>
		</p>
            </div>
        </div>

            <div class="item">
			<center>
            <img src="image/005.jpg" alt="">
			</center>
            <div class="carousel-caption">
        <p> 
		<h1>
		<font color="#FFFFFF">
        Выпускники имеют возможность работать в конструкторских организациях, информационно-аналитических службах, центрах новых информационных технологий и финансовых структурах.
		</font>
		</h1>
		</p>
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
        <h1>История кафедры</h1>
        <p>
        В данном разделе вы можете углубиться в увлекательную историю развития кафедры “Системы и Процессы Управления”. Это поможет вам узнать, частичкой чего вы являетесь и как развивалась кафедра на протяжении полувека своего существования.
        </p>
        <p><a href="department.php" class="btn btn-primary btn-lg" role="button">Узнать больше »</a></p>
      </div>
    </div>

	
    <div class="container" id="news">
    	<div class="row">
    		<div class="col-md-12 blog-main">

				<div class="blog-post">
		            <h2 class="blog-post-title">Изменения графика учебного процесса</h2>
		            <p class="blog-post-meta">Октябрь 21, 2014 by <a href="news.html">Admin</a></p>
		            <p align="justify">В 2014–2015 учебный год внесены некоторые изменения отдельных элементов графика учебного процесса. Однако эти изменения не коснутся количества отведенного для учебы времени и не повлияют на качество учебного процесса. То есть, количество часов останется прежним: 16 недель лекционных и практических занятий с понедельника по пятницу. Суббота останется выходным днем.<a href="news.html" target="_blank"> Читать далее</a></p>
	       		</div>
	          	
	       		<div class="blog-post">
		            <h2 class="blog-post-title">Товажнянский продолжает свою работу в должности ректора</h2>
		            <p class="blog-post-meta">Октябрь 21, 2014 by <a href="news.html">Admin</a></p>
		            <p align="justify">Профессор Товажнянский Леонид Леонидович продолжает свою работу в должности ректора Национального технического университета «Харьковский политехнический институт». После окончания очередного срока (контракта) 19 января 2015 года будет объявлен конкурс на замещение должности ректора Национального технического университета «Харьковский политехнический институт» в соответствии с действующим законодательством Украины.<a href="news.html" target="_blank"> Читать далее</a></p>
          		</div>
	          
                    <ul class="pager">
                    <li><a href="news.html" target="_blank">Читать все новости</a></li>
                     </ul>
          		

	        </div>
    	</div>
    </div>

	<!-- Подвал -->
 <?php include('block/footer.php');?>