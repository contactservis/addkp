<?php
 print_r($nameBlocks);
?>
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
                <?php foreach($Items as $tblItems){ ?>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="7">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true"><?=$tblItems['name']?></a>
                            </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body" style="padding:0;">
                                <ul class="list-group" style="margin-bottom:0;">
                                    <li class="list-group-item" id="7" data-ed="">
                                        <p>Каркас</p>
                                        <div contenteditable="true">
                                            Каркас металлический стальной высокопрочный, прямоугольный из сложногнутых профилей заводского исполнения. Является основным несущим элементом. Нижний и верхний периметр из швеллера 100*50*3, потолочная лага и стойки усиления – швеллер 50*40*3, угловые стройки – угол г/к 63*63*5, окрашен грунт + эмаль в 2 слоя ХВ-0278. Соединения рам со стойками сварные. Жесткость каркаса в целом обеспечивается системой распорок, вертикальных и горизонтальных связей. Блок – контейнер имеет устройства (ушки), обеспечивающие безопасную и надежную перевозку и крепление на транспортных средствах.
                                        </div>
                                        <button type="button" id="add_item_obdj" class="btn btn-success" data-toggle="modal" data-target="#w0">Сохранить изменения</button>
                                    </li>
                                    <li class="list-group-item" id="9" data-ed="Каркас металлический стальной высокопрочный, прямоугольный из сложногнутых профилей заводского исполнения. Является основным несущим элементом. Нижний и верхний периметр из швеллера 100*50*3, потолочная лага и стойки усиления – швеллер 50*40*3, угловые стройки – угол г/к 63*63*5, окрашен грунт + эмаль в 2 слоя ХВ-0278. Соединения рам со стойками сварные. Жесткость каркаса в целом обеспечивается системой распорок, вертикальных и горизонтальных связей. Блок – контейнер имеет устройства (ушки), обеспечивающие безопасную и надежную перевозку и крепление на транспортных средствах. ">Каркас металлический стальной высокопрочный</li>
                                </ul>
                            </div>
                        </div>
                    </div>            
                </div>
                <?php } ?>
            </div>
        </div>    
    </div>
<?php } ?>