<?php
use yii\bootstrap\Modal;
?>

<h2>Новое КП</h2>
<?php
    //print_r($arrItemsBlock[2]);
    //echo "<h4>".$arItem['name']."</h4>";
    /*foreach($arItem as $Items){
        echo '<br>'.$Item->name ;
    }*/
?>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">Схематичное изображение</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="exampleInputFile">Загрузите изображение</label>
                <input type="file" id="exampleInputFile">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="panel panel-default panel-block" id="block1">
        <div class="panel-heading">Комплектация</div>
        <div class="panel-body">
           <?php
            Modal::begin([
                'header' => '<h3>Выберите из списка</h3>',
                'toggleButton' => [
                    'label' => 'Добавить запись',
                    'tag'   => 'button',
                    'class' => 'btn btn-success',
                    'id'    => 'add_item_obdj',
                ],
            ]);
            
           
            echo '<div class="panel-group" id="accordion">';
            foreach($arrItemsBlock[1] as $item){
              echo '<div class="panel panel-default">';
              echo '<div class="panel-heading" id="'.$item['id'].'" ><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$item['id'].'">'.$item['name'].'</a></h4></div>';
              echo '<div id="collapse'.$item['id'].'" class="panel-collapse collapse"><div class="panel-body" style="padding:0;">';
              echo '<ul class="list-group" style="margin-bottom:0;">';
                foreach($item['item'] as $item_cld){                    
                        echo '<li class="list-group-item" id="'.$item_cld['id'].'" data-ed="'.$item_cld['ed'].'">'.$item_cld['name'].'</li>';
                }
              echo '</ul>';
              echo '</div></div>';
              echo '</div>';
            }    
            // полученный массив перебираем и выводим в виде списка
            echo '</div>';

            Modal::end();
            ?>
        </div>        
        <table class="table">
            <thead>
            <tr class="info">
                <th>Название</th><th>ед изм</th><th>кол-во</th>
            </tr>
            </thead>
            <tbody id="blok_1">
                <!--Добавление из списка-->           
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">Расчет стоимости</div>
        <div class="panel-body">
            <button class="btn btn-success"> Добавить запись</button>
        </div>

        <table class="table">
            <thead>
                <tr class="info">                    
                    <th>Наименование</th>
                    <th>ед изм</th>
                    <th>кол-во</th>
                    <th>Стоимость (18%)</th>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input ></td>
                    <td><input size="3"></td>
                    <td><input size="3"></td>
                    <td><input size="8  "></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="panel panel-default panel-block" id="block2">
        <div class="panel-heading">Комплектация</div>
        <div class="panel-body">
            <?php
            Modal::begin([
                'header' => '<h3>Выберите из списка</h3>',
                'toggleButton' => [
                    'label' => 'Выбрать из списка',
                    'tag'   => 'button',
                    'class' => 'btn btn-success',
                    'id'    => 'add_item_obdj',
                ],
            ]);


            echo '<div class="panel-group" id="accordion">';
            foreach($arrItemsBlock[2] as $item){
                echo '<div class="panel panel-default">';
                echo '<div class="panel-heading" id="'.$item['id'].'" ><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$item['id'].'">'.$item['name'].'</a></h4></div>';
                echo '<div id="collapse'.$item['id'].'" class="panel-collapse collapse"><div class="panel-body" style="padding:0;">';
                echo '<ul class="list-group" style="margin-bottom:0;">';
                foreach($item['item'] as $item_cld){
                    echo '<li class="list-group-item" id="'.$item_cld['id'].'" data-ed="'.$item_cld['desc'].'">'.$item_cld['name'].'</li>';
                }
                echo '</ul>';
                echo '</div></div>';
                echo '</div>';
            }
            // полученный массив перебираем и выводим в виде списка
            echo '</div>';

            Modal::end();
            ?>            
            <div id="textblock" contenteditable="true"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="panel panel-default" id="block3">
        <div class="panel-heading">Комплектация условия</div>
        <div class="panel-body">
           <p>1. Цены, указанные в п.1 - 2. настоящего соглашения, действительны с 11.04.2018 и действуют до следующего изменения цены, по соглашению Сторон.</p>
           <p>2.  Расчеты за поставленную продукцию производятся на условиях:</p>
            <ol>
                <li>Предоплата 70 % оплачивается Покупателям в течении 10 календарных дней со дня выставления счета;</li>
                <li>Окончательный платеж 30 % оплачивается Покупателем по готовности Товара, до момента отгрузки со склада Продавца, находящегося по адресу Чувашская Республика город Новочебоксарск улица Промышленная 12..</li>
                <li>В цену Товара включена стоимость доставки на готовую  площадку, подготовленную Покупателем, по адресу: Республика Татарстан, г. Казань.</li>
                <li>Срок изготовления составляет 7 рабочих дней с момента перечисления предоплаты на расчетный счет Продавца.</li>
                <li>Гарантийный срок на Товар составляет 12 (двенадцать) месяцев с момента подписания акта приема-передачи товара обоими Сторонами.</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="panel panel-default panel-block" id="block4">
        <div class="panel-heading">Назначение</div>
        <div class="panel-body">
        <?php
            Modal::begin([
                'header' => '<h3>Выберите из списка</h3>',
                'toggleButton' => [
                    'label' => 'Добавить запись',
                    'tag'   => 'button',
                    'class' => 'btn btn-success',
                    'id'    => 'add_item_obdj',
                ],
            ]);
            
           
            echo '<div class="panel-group" id="accordion">';
            foreach($arrItemsBlock[3] as $item){
              echo '<div class="panel panel-default">';
              echo '<div class="panel-heading" id="'.$item['id'].'" ><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$item['id'].'">'.$item['name'].'</a></h4></div>';
              echo '<div id="collapse'.$item['id'].'" class="panel-collapse collapse"><div class="panel-body" style="padding:0;">';
              echo '<ul class="list-group" style="margin-bottom:0;">';
                foreach($item['item'] as $item_cld){                    
                        echo '<li class="list-group-item" id="'.$item_cld['id'].'" data-ed="'.$item_cld['ed'].'">'.$item_cld['name'].'</li>';
                }
              echo '</ul>';
              echo '</div></div>';
              echo '</div>';
            }    
            // полученный массив перебираем и выводим в виде списка
            echo '</div>';

            Modal::end();
            ?>
            <div id="textblock" contenteditable="true"></div>           
        </div>
    </div>
</div>
<div class="row">
    <div class="panel panel-default panel-block" id="block5">
        <div class="panel-heading">Техническое описание</div>
        <div class="panel-body">
        <?php
            Modal::begin([
                'header' => '<h3>Выберите из списка</h3>',
                'toggleButton' => [
                    'label' => 'Добавить запись',
                    'tag'   => 'button',
                    'class' => 'btn btn-success',
                    'id'    => 'add_item_obdj',
                ],
            ]);
            
           
            echo '<div class="panel-group" id="accordion">';
            foreach($arrItemsBlock[1] as $item){
              echo '<div class="panel panel-default">';
              echo '<div class="panel-heading" id="'.$item['id'].'" ><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$item['id'].'">'.$item['name'].'</a></h4></div>';
              echo '<div id="collapse'.$item['id'].'" class="panel-collapse collapse"><div class="panel-body" style="padding:0;">';
              echo '<ul class="list-group" style="margin-bottom:0;">';
                foreach($item['item'] as $item_cld){                    
                        echo '<li class="list-group-item" id="'.$item_cld['id'].'" data-ed="'.$item_cld['ed'].'">'.$item_cld['name'].'</li>';
                }
              echo '</ul>';
              echo '</div></div>';
              echo '</div>';
            }    
            // полученный массив перебираем и выводим в виде списка
            echo '</div>';

            Modal::end();
            ?> 
            <div id="textblock" contenteditable="true"></div>         
        </div>
    </div>
</div>
<div class="row">
    <div class="panel panel-default panel-block" id="block6">
        <div class="panel-heading">Электропроводка</div>        
        <div class="panel-body"> 
        <?php
            Modal::begin([
                'header' => '<h3>Выберите из списка</h3>',
                'toggleButton' => [
                    'label' => 'Добавить запись',
                    'tag'   => 'button',
                    'class' => 'btn btn-success',
                    'id'    => 'add_item_obdj',
                ],
            ]);
            
           
            echo '<div class="panel-group" id="accordion">';
            foreach($arrItemsBlock[1] as $item){
              echo '<div class="panel panel-default">';
              echo '<div class="panel-heading" id="'.$item['id'].'" ><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$item['id'].'">'.$item['name'].'</a></h4></div>';
              echo '<div id="collapse'.$item['id'].'" class="panel-collapse collapse"><div class="panel-body" style="padding:0;">';
              echo '<ul class="list-group" style="margin-bottom:0;">';
                foreach($item['item'] as $item_cld){                    
                        echo '<li class="list-group-item" id="'.$item_cld['id'].'" data-ed="'.$item_cld['ed'].'">'.$item_cld['name'].'</li>';
                }
              echo '</ul>';
              echo '</div></div>';
              echo '</div>';
            }    
            // полученный массив перебираем и выводим в виде списка
            echo '</div>';

            Modal::end();
            ?><div id="textblock" contenteditable="true"></div>           
        </div>
    </div>
</div>        