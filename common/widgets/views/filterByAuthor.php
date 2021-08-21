<?php

use yii\grid\GridView;

//echo '<pre>';
//print_r($authorId);
//die;
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],


        'title',
        'description',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);