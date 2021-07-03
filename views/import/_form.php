<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FirstTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="first-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fist_field_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fist_field_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fist_field_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fist_field_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fist_field_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fist_field_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fist_field_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fist_field_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fist_field_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fist_field_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
