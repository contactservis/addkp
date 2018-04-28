<?php
use yii\bootstrap\Modal;
?>

<h2>Новое КП</h2>
<?php
    print_r($arItem);
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
    <div class="panel panel-default">
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
            foreach($arItem as $item){
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
        <div class="panel-heading">Расчет стоимости</div>
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
                    <th>Стоимость(18%)</th>
                    <th>Общая стоимость</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input size="3"></td>
                    <td><input  ></td>
                    <td><input size="3"></td>
                    <td><input size="3"></td>
                    <td><input size="8  "></td>
                    <td><input size="8"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="panel panel-default">
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
            foreach($arItem as $item){
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
            <textarea style="width: 100%; margin-top: 10px; height: 300px;">

            </textarea>
        </div>
    </div>
</div>