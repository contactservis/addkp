<?php
$this->title = 'Пользовательская панель';
$this->params['breadcrumbs'][] = $this->title;
?>

<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="<?=Yii::$app->homeUrl?>?r=site%2Fnewkp">+ Сформировать коммерческое предложение</a></li>
    <li class="active"><a href="<?=Yii::$app->homeUrl?>?r=site%2Fnew_klient">+ Заполнить реквизиты клиента</a></li>
    <li class="active"><a href="<?=Yii::$app->homeUrl?>?r=site%2Flist_all">= Посмотреть все коммерческие предложения / договора / акты</a></li>
</ul>
