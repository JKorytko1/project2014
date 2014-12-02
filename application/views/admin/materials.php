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
				<h3 class="panel-title">Файлы</h3>
				</div>
				<div class="panel-body" style="padding: 40px">
					<h4>Категории:</h4><br>
					<select id="select01" style="width: 250px; height: 28px;">
						<option>Книги, методические пособия</option>
						<option>Студенческие проекты</option>
						<option>Статьи</option>
					</select>
					<button class="btn btn-primary" href="#" style="float: right;" data-toggle="modal" data-target="#editFile">
						<span class="glyphicon-white glyphicon-plus"></span> Добавить
					</button>
					<div class="articles" style="margin-top: 60px; border-top: 1px solid #eee;">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Название</th>
									<th>Автор</th>
									<th>Пользователь</th>
									<th>Дата</th>
									<th>Событие</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><span class="glyphicon glyphicon-file" style="margin-right: 5px;"></span><a href="#">ТЕОРИЯ КОДИРОВАНИЯ Учебное пособие.pdf</a></td>
									<td>А.И. Белов, М.В. Некрасова</td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editFile"  style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteFile" style="margin-bottom: 3px; width: 110px;">
											<span class="glyphicon glyphicon-trash"></span> Удалить
										</button>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td><span class="glyphicon glyphicon-file" style="margin-right: 5px;"></span><a href="#">ТЕОРИЯ КОДИРОВАНИЯ Учебное пособие.pdf</a></td>
									<td>А.И. Белов, М.В. Некрасова</td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editFile" style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteFile" style="margin-bottom: 3px; width: 110px;">
											<span class="glyphicon glyphicon-trash"></span> Удалить
										</button>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td><span class="glyphicon glyphicon-file" style="margin-right: 5px;"></span><a href="#">ТЕОРИЯ КОДИРОВАНИЯ Учебное пособие.pdf</a></td>
									<td>А.И. Белов, М.В. Некрасова</td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editFile" style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteFile" style="margin-bottom: 3px; width: 110px;">
											<span class="glyphicon glyphicon-trash"></span> Удалить
										</button>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td><span class="glyphicon glyphicon-file" style="margin-right: 5px;"></span><a href="#">ТЕОРИЯ КОДИРОВАНИЯ Учебное пособие.pdf</a></td>
									<td>А.И. Белов, М.В. Некрасова</td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editFile" style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteFile" style="margin-bottom: 3px; width: 110px;">
											<span class="glyphicon glyphicon-trash"></span> Удалить
										</button>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td><span class="glyphicon glyphicon-file" style="margin-right: 5px;"></span><a href="#">ТЕОРИЯ КОДИРОВАНИЯ Учебное пособие.pdf</a></td>
									<td>А.И. Белов, М.В. Некрасова</td>
									<td><a href="#">Admin</a></td>
									<td>Октябрь 21, 2014</td>
									<td>
										<button class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editFile" style="margin-bottom: 3px; width: 110px;">Редактировать</button>
										<button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteFile" style="margin-bottom: 3px; width: 110px;">
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
			<div class="modal fade" id="editFile" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
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
								<label class="control-label" for="input01">Автор: </label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" style="width: 400px;">
								</div>
							</div>
							<div class="control-group" style="margin-bottom: 20px;">
								<label class="control-label" for="input02">Дата: </label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input02" value="Октябрь 21, 2014">
								</div>
							</div>
							<div class="filedialog" style="margin-bottom: 20px;">
								<label class="control-label" for="input02">Имя файла: </label>
								<div class="control">
									<input type="text" class="input-xlarge" id="input02" style="width: 335px;">
									<a class="file-input-wrapper btn btn-default btn-sm"><span>Обзор</span><input type="file" data-filename-placement="inside"></a>
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
			<div class="modal fade" id="deleteFile" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<!-- ---------------------------------------------------------------- -->
							<p><button class="close" type="button" data-dismiss="modal">x</button></p>
							<h4 class="modal-title" id="myModalLabel">Удалить файл ?</h4>
						<!-- ---------------------------------------------------------------- -->
						</div>
						<div class="modal-body">
						<!-- ---------------------------------------------------------------- -->
							<div class="blog-post">
								<h2 class="blog-post-title">ТЕОРИЯ КОДИРОВАНИЯ Учебное пособие.pdf</h2>
								<p>Автор: А.И. Белов, М.В. Некрасова</p>
								<p class="blog-post-meta">Октябрь 21, 2014 by <a href="news.html">Admin</a></p>
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
		<script src="http://gregpike.net/demos/bootstrap-file-input/bootstrap.file-input.js"></script>	<!-- Open file dialog -->
	</body>

</html>