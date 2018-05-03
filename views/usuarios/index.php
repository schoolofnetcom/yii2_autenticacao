<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Usuarios');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Usuario'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'email:email',
            'usuario',
//            'senha',
            //'auth_key',
            'status:boolean',
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'visible' => Yii::$app->user->can("usuarios/view")
                            || Yii::$app->user->can("usuarios/update")
                            || Yii::$app->user->can("usuarios/delete"),
                'visibleButtons' => [
                    'update'=> Yii::$app->user->can('usuarios/update'),
                    'view'=> Yii::$app->user->can('usuarios/view'),
                    'delete'=> Yii::$app->user->can('usuarios/delete'),
                ]
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
