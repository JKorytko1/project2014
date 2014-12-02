 
<form method="post" enctype="multipart/form-data" role="form" class="row" action="<?=base_url('index.php/news/add');?>">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
    		<h1>Добавить новость:</h1>
    <!-- warning -->
        <!-- <div class="alert alert-block"></div> -->
      <label for="name" class="control-label">Название:</label>
        <input type="text" class="form-control" name="title" id="title" value=""/> 
        <hr/>
        <div class="controls-row">
            <label for="author" class="control-label">Автор:</label>
		 <input type="text" class="form-control" name="author" id="athor" value=""/> 
        </div>

        <hr/>
   <!--  <label for="alias">Адрес (alias):</label>
        <input type="text" class="form-control" name="alias" id="alias" value=""/>  -->
        <hr/>
        <label for="text_preview">Краткое описание:</label>
        <textarea class="form-control" name="description" id="description" rows="10"></textarea>    
        <hr/>

        <label for="text">Текст:</label>
        <textarea class="form-control" name="text" id="text" rows="10"></textarea>   
        <button class="btn btn-primary">Сохранить</button>
    </div>
</form>
