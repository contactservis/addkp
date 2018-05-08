<div class="row">
    <h3>Добавление</h3>
    <div class="panel panel-default">
            <div class="panel-heading">Добавление нового блока</div>
            <div class="panel-body">
                <form id="form_add_item">
                <div class="form-group">
                    <label for="exampleInputEmail1">Заголовок</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите заголовок записи">
                </div>
                    <button type="button" id="add_item" class="btn btn-success" style="margin-top: 15px;">Сохранить</button>
                </form>
            </div>
    </div>
    <div class="panel panel-default">
            <div class="panel-heading">Добавление новой категории</div>
            <div class="panel-body">
                <form id="form_add_item">
                <div class="form-group">
                    <label for="exampleInputEmail1">Выберите блок</label>
                        <select class="form-control">
                        <?php foreach($nameBlocks as $key => $nameBlock) { ?>
                            <option value="<?=$key?>"><?=$nameBlock?></option>                    
                        <?php } ?>
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Заголовок</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите заголовок записи">
                </div>
                    <button type="button" id="add_item" class="btn btn-success" style="margin-top: 15px;">Сохранить</button>
                </form>
            </div>
    </div>
    <div class="panel panel-default">
            <div class="panel-heading">Добавление новой записи</div>
            <div class="panel-body">
                <form id="form_add_item">
                <div class="form-group">
                    <label for="exampleInputEmail1">Выберите блок</label>
                        <select class="form-control">
                        <?php foreach($nameBlocks as $key => $nameBlock) { ?>
                            <option value="<?=$key?>"><?=$nameBlock?></option>                    
                        <?php } ?>
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Выберите категорию</label>
                        <select class="form-control">
                        <?php foreach($nameCategorys as $key => $nameCategory) { ?>
                            <option value="<?=$key?>"><?=$nameCategory?></option>                    
                        <?php } ?>
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Заголовок</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите заголовок записи">                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Заголовок</label>
                    <div id="textblock" contenteditable="true"></div>
                </div>
                
                    <button type="button" id="add_item" class="btn btn-success" style="margin-top: 15px;">Сохранить</button>
                </form>
            </div>
    </div>
</div>
<div class="row">
    <h3>Редактирование</h3>
</div>
<?php 
    foreach($arrItems as $key => $Items){
?>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $nameBlocks[$key] ;?></div>
            <div class="panel-body">                
                <?php foreach($Items as $tblItems){ ?>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="<?=$tblItems['id']?>">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$tblItems['id']?>" aria-expanded="true"><?=$tblItems['name']?></a>
                            </h4>
                        </div>
                        <div id="collapse<?=$tblItems['id']?>" class="panel-collapse collapse" aria-expanded="true" style="">
                            <div class="panel-body" style="padding:0;">                                
                                <?php foreach($tblItems['item'] as $listItem) { ?>
                                    <ul class="list-group" style="margin-bottom:0;">
                                        <li class="list-group-item" id="7" data-ed="">
                                            <h4 contenteditable="true"><?php echo $listItem['name'] ;?></h4>
                                            <div contenteditable="true">
                                                <?=$listItem['desc']?>
                                            </div>
                                            <button type="button" id="save_item" class="btn btn-success" style="margin-top: 15px;">Сохранить изменения</button>
                                        </li>                                    
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>            
                </div>
                <?php } ?>
            </div>
        </div>    
    </div>
<?php } ?>