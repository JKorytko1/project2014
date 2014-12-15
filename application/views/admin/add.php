 
<form method="post" enctype="multipart/form-data" role="form" class="row">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
    		<h1><?php if(isset($news)){?>Редактировать<?php } else { ?> Добавить<?php }?> новость</h1>
        <label for="name" class="control-label">Название:</label>
        <input type="text" class="form-control" name="title" id="title" value="<?php if(isset($news[0]->title)) echo $news[0]->title; ?>"/> 

		 <input type="hidden" class="form-control" name="author" id="athor" value="Аdmin"/>    
        <hr/>
         <label for="name" class="control-label">Путь к картинки:</label>
        <input type="text" class="form-control" name="image" id="image" value="<?php if(isset($news[0]->image)) echo $news[0]->image; ?>"/>    
        <hr/>
        <label for="text_preview">Краткое описание:</label>
        <textarea class="form-control" name="description" id="description" rows="10"><?php if(isset($news[0]->description)) echo $news[0]->description; ?></textarea>    
        <hr/>

        <label for="text">Текст:</label>
        <textarea class="form-control" name="text" id="text" rows="10"><?php if(isset($news[0]->text)) echo $news[0]->text; ?></textarea>   
        </br></br>
        <button class="btn btn-primary">Сохранить</button>
    </div>
</form>
