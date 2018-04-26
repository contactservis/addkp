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

            echo 'Say hello...';

            Modal::end();
            ?>
        </div>
        <table class="table">
            <thead>
            <tr class="info">
                <th>id</th><th>Название</th><th>ед изм</th><th>кол-во</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>34</td><td>Блок-контейнер металлический БКМ 6.0*2.4 h-
                    2.5м.(Оцинкованный профилированный лист. Утеплитель 50мм -
                    ДВП - потолок ДВП, пол линолеум.</td><td>Компл</td><td><input ></td>
            </tr>
            <tr>
                <td>35</td><td>Дверь металл. утеплённая 0.8*2.0м., замок врезной.</td><td>Компл</td><td><input ></td>
            </tr>
            <tr>
                <td>36</td><td>Электропроводка (1 светильник светодиодный, 1 двухместные
                    розетки, 1 выключателя, щит АО)</td><td>Компл</td><td><input ></td>
            </tr>
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
                <th>Наименование товар, размерные
                    характеристики</th>
                <th>ед изм</th>
                <th>кол-во</th>
                <th>Стоимость за ед. изм. с учетом доставки, с НДС (18%), руб.</th>
                <th>Общая стоимость с учетом доставки, с НДС (18%), руб.</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input ></td>
                    <td><textarea></textarea></td>
                    <td><input ></td>
                    <td><input ></td>
                    <td><input ></td>
                    <td><input ></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>