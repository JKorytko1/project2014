<?php header('Content-Type: text/html; charset=utf-8'); ?>

<html>

	<head>
		<title>Панель управления</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<?php 
			include 'blocks/header.php';
			include 'blocks/menu.php'; 
		 ?>

		<!-- Содержимое страницы -->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title">Редактор страниц</h3>
				</div>
				<div class="panel-body" style="padding: 40px">
					<h4>Категории:</h4><br>
					<select id="select01" style="width: 220px; height: 28px;">
						<option>Новости сайта</option>
						<option>Конференции</option>
						<option>Абитуриенту</option>
						<option>Группы</option>
						<option>Профсоюз студентов</option>
					</select>
					<button class="btn btn-primary" href="#" style="float: right;" data-toggle="modal" data-target="#editArticle">
						<span class="glyphicon-white glyphicon-plus"></span> Добавить
					</button>
					<div class="articles" style="margin-top: 60px; border-top: 1px solid #eee;">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Заголовок статьи</th>
									<th>Пользователь</th>
									<th>Дата</th>
									<th>Событие</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><a href="#">Изменения графика учебного процесса</a></td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editArticle" style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteArticle" style="margin-bottom: 3px; width: 110px;">
											<span class="glyphicon glyphicon-trash"></span> Удалить
										</button>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="#">Изменения графика учебного процесса</a></td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editArticle" style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteArticle" style="margin-bottom: 3px; width: 110px;">
											<span class="glyphicon glyphicon-trash"></span> Удалить
										</button>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td><a href="#">Изменения графика учебного процесса</a></td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editArticle" style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteArticle" style="margin-bottom: 3px; width: 110px;">
											<span class="glyphicon glyphicon-trash"></span> Удалить
										</button>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td><a href="#">Изменения графика учебного процесса</a></td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editArticle" style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteArticle" style="margin-bottom: 3px; width: 110px;">
											<span class="glyphicon glyphicon-trash"></span> Удалить
										</button>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td><a href="#">Изменения графика учебного процесса</a></td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editArticle" style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteArticle" style="margin-bottom: 3px; width: 110px;">
											<span class="glyphicon glyphicon-trash"></span> Удалить
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div> 
					<nav>
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!-- Модальные окна -->
		<div class="model-window">
			<!-- Редактирование статей -->
			<div class="modal fade" id="editArticle" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<!-- ---------------------------------------------------------------- -->
							<p><button class="close" type="button" data-dismiss="modal">x</button></p>
							<h4 class="modal-title" id="myModalLabel">Добавить / Редактировать</h4>
						<!-- ---------------------------------------------------------------- -->
						</div>
						<div class="modal-body">
						<!-- ---------------------------------------------------------------- -->
							<div class="control-group" style="margin-bottom: 20px;">
								<label class="control-label" for="input01">Заголовок статьи: </label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" style="width: 400px;" value="Изменения графика учебного процесса">
								</div>
							</div>
							<div class="control-group" style="margin-bottom: 20px;">
								<label class="control-label" for="input02">Дата: </label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input02" value="Октябрь 21, 2014">
								</div>
							</div>
							<div class="control-group" style="margin-bottom: 20px; border-top: 1px solid #eee;">
								<label class="control-label" for="input03" style="margin-top: 10px; margin-bottom: 10px;">Описание: </label>
								<ul class="toolbar">
									<li>
										<div class="btn-group">
											<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-bold"></span> <span class="sr-only">Left Align</span></button>
											<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-italic"></span> <span class="sr-only">Center Align</span></button>
										</div>
									</li>
									<li>
										<div class="btn-group">
											<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-left"></span> <span class="sr-only">Left Align</span></button>
											<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-center"></span> <span class="sr-only">Center Align</span></button>
											<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-right"></span> <span class="sr-only">Right Align</span></button>
											<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-justify"></span> <span class="sr-only">Justify</span></button>
										</div>
									</li>
									<li>
										<div class="btn-group">
											<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-picture"></span> <span class="sr-only">Left Align</span></button>
										</div>
									</li>
									<li>
										<div class="btn-group">
											<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-share"></span> <span class="sr-only">Left Align</span></button>
										</div>
									</li>
								</ul>
								<div class="controls">
									<textarea class="form-control" rows="15" style="resize: none;">В 2014–2015 учебный год внесены некоторые изменения отдельных элементов графика учебного процесса. Однако эти изменения не коснутся количества отведенного для учебы времени и не повлияют на качество учебного процесса. То есть, количество часов останется прежним: 16 недель лекционных и практических занятий с понедельника по пятницу. Суббота останется выходным днем.Осенний семестр окончится до Нового года. Для сессии отводится 1 неделя. Затем студенты дневной формы обучения отправятся на двухмесячные каникулы, которые будут длиться январь и февраль. А те студенты, у которых учебным планом предусмотрена практика, пройдут ее на предприятиях не летом, как обычно, а в феврале и марте, с 2.02 по 29.03. Защиты дипломных проектов будущих специалистов и магистров, которые после бакалаврата обучаются 1,5 года, пройдут с 29 декабря 2014 по 11 января 2015 года в специально выделенном для этого корпусе У-1. Там же будет проходить и установочная сессия для студентов заочного факультета. Весенний семестр начнется в марте и продлится до конца июня. Для весенней сессии также будет предусмотрена 1 неделя.</textarea>
								</div>
							</div>
						<!-- ---------------------------------------------------------------- -->
						</div>
						<div class="modal-footer">
						<!-- ---------------------------------------------------------------- -->
							<div class="form-actions">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Сохранить</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
							</div>
						<!-- ---------------------------------------------------------------- -->
						</div>
					</div>
				</div>
			</div>
			<!-- Удалить статью -->
			<div class="modal fade" id="deleteArticle" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<!-- ---------------------------------------------------------------- -->
							<p><button class="close" type="button" data-dismiss="modal">x</button></p>
							<h4 class="modal-title" id="myModalLabel">Удалить новость ?</h4>
						<!-- ---------------------------------------------------------------- -->
						</div>
						<div class="modal-body">
						<!-- ---------------------------------------------------------------- -->
							<div class="blog-post">
								<h2 class="blog-post-title">Изменения графика учебного процесса</h2>
								<p class="blog-post-meta">Октябрь 21, 2014 by <a href="news.html">Admin</a></p>
								<p align="justify">
								В 2014–2015 учебный год внесены некоторые изменения отдельных элементов графика учебного процесса. Однако эти изменения не коснутся количества отведенного для учебы времени и не повлияют на качество учебного процесса. То есть, количество часов останется прежним: 16 недель лекционных и практических занятий с понедельника по пятницу. Суббота останется выходным днем.
								Осенний семестр окончится до Нового года. Для сессии отводится 1 неделя...
								</p>
							</div>
						<!-- ---------------------------------------------------------------- -->
						</div>
						<div class="modal-footer">
						<!-- ---------------------------------------------------------------- -->
							<div class="form-actions">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Подтвердить</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
							</div>
						<!-- ---------------------------------------------------------------- -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>

</html>