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
            <img src="<?=base_url();?>assets/images/0011.jpg" width="100%" alt="">
			</center>
            <div class="carousel-caption"> 
            </div>
        </div>
	
        <div class="item">
		    <center>
            <img src="<?=base_url();?>assets/images/0022.jpg" width="100%" alt="">
			</center>
            <div class="carousel-caption">
            </div>
        </div>
		
        <div class="item">
			<center>
            <img src="<?=base_url();?>assets/images/0033.jpg" width="100%" alt="">
			</center>
            <div class="carousel-caption">
            </div>
        </div>
		
        <div class="item">
			<center>
            <img src="<?=base_url();?>assets/images/0044.jpg" width="100%" alt="">
			</center>
            <div class="carousel-caption">
            </div>
        </div>

        <div class="item">
			<center>
            <img src="<?=base_url();?>assets/images/0055.jpg" width="100%" alt="">
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
        <h1>Системи і Процеси Управління</h1>
        <p>
         У Національному технічному університеті "Харківський політехнічний інститут" налічується близько 30 кафедр, кожна з яких має свої досягнення і традиції. Але є серед них такі, які визначили цілу епоху в житті факультету та університету в цілому, розвиток передових спеціальностей, створення наукових шкіл. Саме такою і є кафедра "Системи та процеси керування"
        </p>
        <p><a href="<?=base_url();?>index.php/department.php" class="btn btn-primary btn-lg" role="button">Дізнатися більше »</a></p>
      </div>
    </div>

    <!-- <div class="container" id="news">
        <div class="row">
            <div class="col-md-12">
                <h2 class="blog-post-title">Зміни графіка навчального процесу</h2>
                <p class="blog-post-meta">Жовтень 21, 2014 by Admin</a></p>
                <p align="justify"><big>У 2014-2015 навчальний рік внесені деякі зміни окремих елементів графіка навчального процесу. 
                    Однак ці зміни не торкнуться кількості відведеного
                    для навчання часу і не вплинуть на якість навчального процесу. Тобто, кількість годин залишиться колишніми:
                    16 тижнів лекційних та практичних занять з понеділка по п'ятницю. Субота залишиться вихідним днем.
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
    </div> -->
	
    <div class="container" id="news">
        <div class="row">
            <div class="col-md-12">
                <h2 class="blog-post-title">Зміни графіка навчального процесу</h2>
                <p class="blog-post-meta">Жовтень 21, 2014 by Admin</a></p>
                <p align="justify"><big>У 2014-2015 навчальний рік внесені деякі зміни окремих елементів графіка навчального процесу. 
                    Однак ці зміни не торкнуться кількості відведеного для навчання часу і не вплинуть на якість навчального процесу. 
                    Тобто, кількість годин залишиться колишніми: 16 тижнів лекційних та практичних занять з понеділка по п'ятницю. Субота залишиться вихідним днем.
                   <a href="<?=base_url();?>index.php/news.php"> Читати далі</a></big></p>
               
                <h2 class="blog-post-title">Товажнянський продовжує свою роботу на посаді ректора</h2>
                <p class="blog-post-meta">Жовтень 21, 2014 by Admin</a></p>
                <p align="justify"><big>Професор Товажнянський Леонід Леонідович продовжує свою роботу на посаді ректора Національного технічного університету «Харківський політехнічний інститут». 
                    після закінчення чергового строку (контракту) 19 січня 2015 буде оголошено конкурс на заміщення посади ректора Національного технічного університету «Харківський політехнічний інститут» 
                    відповідно з чинним законодавствомУкраїни.<a href="<?=base_url();?>index.php/news.php"> Читати далі</a></big></p>
               
                <ul class="blog-main pager">
                    <br>
                    <li><a href="<?=base_url();?>index.php/news.php" >Читати усі новини</a></li>
                </ul>
	        </div>
        </div>
    </div>