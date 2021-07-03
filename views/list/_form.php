<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FirstTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="first-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'field_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
