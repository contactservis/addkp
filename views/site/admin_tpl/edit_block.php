<div class="row">
    <h3>Список блоков для КП</h3>
</div>
<?php 
    foreach($arrItems as $key => $Items){
?>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $nameBlocks[$key] ;?></div>
            <div class="panel-body">
                <h3>Добавить запись</h3>
                <button type="button" id="add_item" class="btn btn-success" style="margin-top: 15px;">Сохранить изменения</button>
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
                                            <button type="button" id="add_item_obdj" class="btn btn-success" style="margin-top: 15px;">Сохранить изменения</button>
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