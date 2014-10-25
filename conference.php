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
 
<!-- Контент -->

<div class="container">
	<div class="row">
  		<div class="col-md-10 col-md-offset-2">
  			<div class="blog-post">
	  			<h2 class="blog-post-title">Сергеевские чтения</h2>
	  			<p class="blog-post-meta">Октябрь 21, 2014 by <a href="news.html">Admin</a></p>
				<p align="justify">12 Сентября 2014 г. состоится научно-техническая конференция "Сергеевские чтения", посвящення 100-летию со дня рождения академика В.Г.Сергеева и 50-летию создания специальности "Динамика полета и управление". Приглашаем всех желающих принять участие в конференции!</p>
				<p align="justify">Начало конференции - 10.00 в 12 аудитории ректорского корпуса НТУ "ХПИ". </p>
			</div>
			<div style="margin-bottom: 500px;"></div>
		</div>
	</div>
</div>

<!-- footer -->
 <?php include('block/footer.php');?>



