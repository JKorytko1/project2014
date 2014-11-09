<!-- Новости сайта -->

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<!-- Заголовок страницы -->
	<h1 class="page-header">Новости сайта</h1>
	<!-- Гармошка -->
	<div class="accordion" id="accordion">
		<!-- ////////// -->
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle collapsed" href="#collapseOne" data-toggle="collapse" data-parent="#accordion"><br>Смотреть все новости<br></a>
			</div>
			<div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
				<div class="accordion-inner">
					<!-- /////////// -->
					<div class="blog-post">
						<h2 class="blog-post-title">Изменения графика учебного процесса</h2>
						<p class="blog-post-meta">Октябрь 21, 2014 by <a href="news.html">Admin</a></p>
						<p align="justify">
						В 2014–2015 учебный год внесены некоторые изменения отдельных элементов графика учебного процесса. Однако эти изменения не коснутся количества отведенного для учебы времени и не повлияют на качество учебного процесса. То есть, количество часов останется прежним: 16 недель лекционных и практических занятий с понедельника по пятницу. Суббота останется выходным днем.
						Осенний семестр окончится до Нового года. Для сессии отводится 1 неделя.
						Затем студенты дневной формы обучения отправятся на двухмесячные каникулы, которые будут длиться январь и февраль.
						</p>
						<p><a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#viewArticle">Читать далее»</a></p>
					</div>	
					<div class="blog-post">
						<h2 class="blog-post-title">Изменения графика учебного процесса</h2>
						<p class="blog-post-meta">Октябрь 21, 2014 by <a href="news.html">Admin</a></p>
						<p align="justify">
						В 2014–2015 учебный год внесены некоторые изменения отдельных элементов графика учебного процесса. Однако эти изменения не коснутся количества отведенного для учебы времени и не повлияют на качество учебного процесса. То есть, количество часов останется прежним: 16 недель лекционных и практических занятий с понедельника по пятницу. Суббота останется выходным днем.
						Осенний семестр окончится до Нового года. Для сессии отводится 1 неделя.
						Затем студенты дневной формы обучения отправятся на двухмесячные каникулы, которые будут длиться январь и февраль.
						</p>
						<p><a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#viewArticle">Читать далее»</a></p>
					</div>
					<!-- /////////////	 -->
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion"><br>Редактировать новости<br></a>
			</div>
			<div class="accordion-body collapse" id="collapseTwo">
				<div class="accordion-inner">
					<!-- //////////// -->
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
								<td>Изменения графика учебного процесса</td>
								<td><a href="#">Admin</a></td>
								<td>Октябрь 21, 2014</td>
								<td>
									<button class="btn btn-success" href="#" data-toggle="modal" data-target="#editArticle">Редактировать</button>
									<button class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteArticle">Удалить</button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Изменения графика учебного процесса</td>
								<td><a href="#">Admin</a></td>
								<td>Октябрь 21, 2014</td>
								<td>
									<button class="btn btn-success" href="#" data-toggle="modal" data-target="#editArticle">Редактировать</button>
									<button class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteArticle">Удалить</button>
								</td>
							</tr>
						</tbody>
					</table>
					<!-- ////////// -->
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" href="#collapseThree" data-toggle="collapse" data-parent="#accordion"><br>Добавить новость<br></a>
			</div>
			<div class="accordion-body collapse" id="collapseThree">
				<div class="accordion-inner">
					<!-- /////////// -->
					<div class="control-group" style="margin-bottom: 20px;">
						<label class="control-label" for="input01">Заголовок статьи: </label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="input01" style="width: 400px;">
						</div>
					</div>

					<div class="control-group" style="margin-bottom: 20px;">
						<label class="control-label" for="input02">Дата: </label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="input02">
						</div>
					</div>
					
					<div class="control-group" style="margin-bottom: 20px; border-top: 1px solid #eee;">
						<label class="control-label" for="input03" style="margin-top: 10px;">Описание: </label>
						<div class="controls">
							<textarea class="form-control" rows="15" style="resize: none;"></textarea>
						</div>
					</div>

					<div class="form-actions">
						<button href="#" class="btn btn-primary">Сохранить</button>
						<button href="#" class="btn btn-default">Отмена</button>
					</div>
					<!-- //////////// -->
		
				</div>
			</div>
		</div>
		<!-- ////////// -->
	</div>
	<!-- Модальные окна -->
	<div class="model-window">
		<!-- Просмотр новостей -->
		<div class="modal fade" id="viewArticle" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<!-- ////////// -->
						<p><button class="close" type="button" data-dismiss="modal">x</button></p>
						<h4 class="modal-title" id="myModalLabel">Просмотр новостей</h4>
						<!-- ///////// -->
					</div>
					<div class="modal-body">
						<!-- ////////// -->
						<div class="blog-post">
							<h2 class="blog-post-title">Изменения графика учебного процесса</h2>
							<p class="blog-post-meta">Октябрь 21, 2014 by <a href="news.html">Admin</a></p>
							<p align="justify">
						    В 2014–2015 учебный год внесены некоторые изменения отдельных элементов графика учебного процесса. Однако эти изменения не коснутся количества отведенного для учебы времени и не повлияют на качество учебного процесса. То есть, количество часов останется прежним: 16 недель лекционных и практических занятий с понедельника по пятницу. Суббота останется выходным днем.
						    Осенний семестр окончится до Нового года. Для сессии отводится 1 неделя.
						    Затем студенты дневной формы обучения отправятся на двухмесячные каникулы, которые будут длиться январь и февраль.
						    А те студенты, у которых учебным планом предусмотрена практика, пройдут ее на предприятиях не летом, как обычно, а в феврале и марте, с 2.02 по 29.03.
						    Защиты дипломных проектов будущих специалистов и магистров, которые после бакалаврата обучаются 1,5 года, пройдут с 29 декабря 2014 по 11 января 2015 года в специально выделенном для этого корпусе У-1.
						    Там же будет проходить и установочная сессия для студентов заочного факультета.
						    Весенний семестр начнется в марте и продлится до конца июня. Для весенней сессии также будет предусмотрена 1 неделя.
							</p>
						</div>
						<!-- ////////// -->
					</div>
					<div class="modal-footer">
						<!-- ///////// -->
						<div class="form-actions">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
						</div>
						<!-- ///////// -->
					</div>
				</div>
			</div>
		</div>
		<!-- Редактирование новостей -->
		<div class="modal fade" id="editArticle" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<!-- ////////// -->
						<p><button class="close" type="button" data-dismiss="modal">x</button></p>
						<h4 class="modal-title" id="myModalLabel">Редактирование</h4>
						<!-- ///////// -->
					</div>
					<div class="modal-body">
						<!-- ////////// -->
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
							<label class="control-label" for="input03" style="margin-top: 10px;">Описание: </label>
							<div class="controls">
								<textarea class="form-control" rows="15" style="resize: none;">В 2014–2015 учебный год внесены некоторые изменения отдельных элементов графика учебного процесса. Однако эти изменения не коснутся количества отведенного для учебы времени и не повлияют на качество учебного процесса. То есть, количество часов останется прежним: 16 недель лекционных и практических занятий с понедельника по пятницу. Суббота останется выходным днем.Осенний семестр окончится до Нового года. Для сессии отводится 1 неделя. Затем студенты дневной формы обучения отправятся на двухмесячные каникулы, которые будут длиться январь и февраль. А те студенты, у которых учебным планом предусмотрена практика, пройдут ее на предприятиях не летом, как обычно, а в феврале и марте, с 2.02 по 29.03. Защиты дипломных проектов будущих специалистов и магистров, которые после бакалаврата обучаются 1,5 года, пройдут с 29 декабря 2014 по 11 января 2015 года в специально выделенном для этого корпусе У-1. Там же будет проходить и установочная сессия для студентов заочного факультета. Весенний семестр начнется в марте и продлится до конца июня. Для весенней сессии также будет предусмотрена 1 неделя.</textarea>
							</div>
						</div>
						<!-- ////////// -->
					</div>
					<div class="modal-footer">
						<!-- ///////// -->
						<div class="form-actions">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Сохранить</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
						</div>
						<!-- ///////// -->
					</div>
				</div>
			</div>
		</div>
		<!-- Удаление новостей -->
		<div class="modal fade" id="deleteArticle" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<!-- ////////// -->
						<p><button class="close" type="button" data-dismiss="modal">x</button></p>
						<h4 class="modal-title" id="myModalLabel">Удалить новость ?</h4>
						<!-- ///////// -->
					</div>
					<div class="modal-body">
						<!-- ////////// -->
						<div class="blog-post">
							<h2 class="blog-post-title">Изменения графика учебного процесса</h2>
							<p class="blog-post-meta">Октябрь 21, 2014 by <a href="news.html">Admin</a></p>
							<p align="justify">
							В 2014–2015 учебный год внесены некоторые изменения отдельных элементов графика учебного процесса. Однако эти изменения не коснутся количества отведенного для учебы времени и не повлияют на качество учебного процесса. То есть, количество часов останется прежним: 16 недель лекционных и практических занятий с понедельника по пятницу. Суббота останется выходным днем.
							Осенний семестр окончится до Нового года. Для сессии отводится 1 неделя...
							</p>
						</div>
						<!-- ////////// -->
					</div>
					<div class="modal-footer">
						<!-- ///////// -->
						<div class="form-actions">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Подтвердить</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
						</div>
						<!-- ///////// -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ////////// -->
</div>