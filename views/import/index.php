<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FirstTable */
/* @var $form yii\widgets\ActiveForm */

$this->title = Yii::t('app', 'Import Data');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="import-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstFile')->fileInput() ?>

    <?= $form->field($model, 'rowsFrist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secondFile')->fileInput() ?>

    <?= $form->field($model, 'rowsSecond')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Import'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
