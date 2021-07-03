<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FirstTable */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'First Tables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="first-table-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fist_field_1',
            'fist_field_2',
            'fist_field_3',
            'fist_field_4',
            'fist_field_5',
            'fist_field_6',
            'fist_field_7',
            'fist_field_8',
            'fist_field_9',
            'fist_field_10',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
