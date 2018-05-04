<?php
$this->title = 'Панель Администратора';
$this->params['breadcrumbs'][] = $this->title;
?>

<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="<?=Yii::$app->homeUrl?>?r=site%2Fnewkp">Редактирование блоков КП</a></li>
    <li class="active"><a href="<?=Yii::$app->homeUrl?>?r=site%2Fnew_klient">Текстовые шаблоны</a></li>
    <li class="active"><a href="<?=Yii::$app->homeUrl?>?r=site%2Flist_all">База данных клиентов</a></li>
</ul>
