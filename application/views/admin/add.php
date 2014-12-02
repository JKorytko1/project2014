 
<form method="post" enctype="multipart/form-data" role="form" class="row" action="<?=base_url('index.php/news/add');?>">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
    		<h1>Добавить новость:</h1>

        <label for="name" class="control-label">Название:</label>
        <input type="text" class="form-control" name="title" id="title" value=""/> 

		 <input type="hidden" class="form-control" name="author" id="athor" value="Аdmin"/>    
        <hr/>
         <label for="name" class="control-label">Путь к картинки:</label>
        <input type="text" class="form-control" name="image" id="image" value=""/>    
        <hr/>
        <label for="text_preview">Краткое описание:</label>
        <textarea class="form-control" name="description" id="description" rows="10"></textarea>    
        <hr/>

        <label for="text">Текст:</label>
        <textarea class="form-control" name="text" id="text" rows="10"></textarea>   
        <button class="btn btn-primary">Сохранить</button>
    </div>
</form>
