<?php
use yii\bootstrap\Modal;
?>

<h2>Новое КП</h2>
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
    <div class="panel panel-default">
        <div class="panel-heading">Сформировать таблицу</div>
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
            
            // массив категорий берем потом из модели
            $arrKategory = array( 
                array(
                    'id'=> 0,
                    'name'=>'Окна',
                    'item'=>array(
                        array('id'=> 0, 'name'=>'Окно ПВХ 0.8х1.0 м. однокамерный стеклопакет', 'ed'=>'шт.'),
                        array('id'=> 1, 'name'=>'Окно ПВХ 0.8х2.0 м. однокамерный стеклопакет', 'ed'=>'шт.'),
                        array('id'=> 3, 'name'=>'Окно ПВХ 1.0х2.0 м. однокамерный стеклопакет', 'ed'=>'шт.')
                    )
                ),
                array(
                    'id'=>'1',
                    'name'=>'Двери',
                    'item'=>array(
                        array('id'=> 0, 'name'=>'Дверь металл. утеплённая 0.8*2.0м., замок врезной.', 'ed'=>'шт.'),
                        array('id'=> 1, 'name'=>'Дверь металл. утеплённая 0.9*2.0м., замок врезной.', 'ed'=>'шт.'),
                        array('id'=> 3, 'name'=>'Дверь деревянная. утеплённая 0.8*2.0м., замок врезной.', 'ed'=>'шт.')
                    ),
                ),
                array(
                    'id'=>'2',
                    'name'=>'Блоки',
                    'item'=>array(
                        array('id'=> 0, 'name'=>'Дверь металл. утеплённая 0.8*2.0м., замок врезной.', 'ed'=>'шт.'),
                        array('id'=> 1, 'name'=>'Дверь металл. утеплённая 0.9*2.0м., замок врезной.', 'ed'=>'шт.'),
                        array('id'=> 3, 'name'=>'Дверь деревянная. утеплённая 0.8*2.0м., замок врезной.', 'ed'=>'шт.')
                    ),
                ),
                array(
                    'id'=>'3',
                    'name'=>'Электропроводка',
                    'item'=>array(
                        array('id'=> 0, 'name'=>'Дверь металл. утеплённая 0.8*2.0м., замок врезной.', 'ed'=>'шт.'),
                        array('id'=> 1, 'name'=>'Дверь металл. утеплённая 0.9*2.0м., замок врезной.', 'ed'=>'шт.'),
                        array('id'=> 3, 'name'=>'Дверь деревянная. утеплённая 0.8*2.0м., замок врезной.', 'ed'=>'шт.')
                    ),
                ),
                array(
                    'id'=>'4',
                    'name'=>'Услуги',
                    'item'=>array(
                        array('id'=> 0, 'name'=>'Дверь металл. утеплённая 0.8*2.0м., замок врезной.', 'ed'=>'шт.'),
                        array('id'=> 1, 'name'=>'Дверь металл. утеплённая 0.9*2.0м., замок врезной.', 'ed'=>'шт.'),
                        array('id'=> 3, 'name'=>'Дверь деревянная. утеплённая 0.8*2.0м., замок врезной.', 'ed'=>'шт.')
                    ),
                )
            );
            echo '<div class="panel-group" id="accordion">';
            foreach($arrKategory as $item){
              echo '<div class="panel panel-default">';
              echo '<div class="panel-heading" id="'.$item['id'].'" ><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$item['id'].'">'.$item['name'].'</a></h4></div>';
              echo '<div id="collapse'.$item['id'].'" class="panel-collapse collapse"><div class="panel-body">';
              echo '<ul class="list-group">';
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
                <th>id</th><th>Название</th><th>ед изм</th><th>кол-во</th>
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
        <div class="panel-heading">Комплектация</div>
        <div class="panel-body">
            <button class="btn btn-success"> Добавить запись</button>
        </div>

        <table class="table">
            <thead>
                <tr class="info">
                    <th>id</th>
                    <th>Наименование</th>
                    <th>ед изм</th>
                    <th>кол-во</th>
                    <th>Стоимость с НДС (18%), руб.</th>
                    <th>Общая стоимость, с НДС (18%), руб.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input ></td>
                    <td><input  ></td>
                    <td><input ></td>
                    <td><input ></td>
                    <td><input ></td>
                    <td><input ></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">Расчет стоимости</div>
        <div class="panel-body">
            <textarea>

            </textarea>
        </div>
    </div>
</div>