<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchFistTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="first-table-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fist_field_1') ?>

    <?= $form->field($model, 'fist_field_2') ?>

    <?= $form->field($model, 'fist_field_3') ?>

    <?= $form->field($model, 'fist_field_4') ?>

    <?php // echo $form->field($model, 'fist_field_5') ?>

    <?php // echo $form->field($model, 'fist_field_6') ?>

    <?php // echo $form->field($model, 'fist_field_7') ?>

    <?php // echo $form->field($model, 'fist_field_8') ?>

    <?php // echo $form->field($model, 'fist_field_9') ?>

    <?php // echo $form->field($model, 'fist_field_10') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
