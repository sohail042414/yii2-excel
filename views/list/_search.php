<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchFirstTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="first-table-search">

    <?php $form = ActiveForm::begin([
        'action' => ['compare'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'compare_field_first')->dropDownList(
            $model->getCompareFields(),
            ['prompt'=>'First table field to compare']
        ); 
    ?>

    <?= $form->field($model, 'compare_field_second')->dropDownList(
            $model->getCompareFields(),
            ['prompt'=>'Second table field to compare']
        );  
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <a href="<?= Url::to(['list/compare']); ?>" class ="btn btn-warning">Reset</a>
        <?php //= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
