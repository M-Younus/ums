<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\course\models\Courses;
use dosamigos\multiselect\MultiSelect;


/* @var $this yii\web\View */
/* @var $model app\modules\employee\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    
    <?php $courses=new Courses();?>
    
    <?php

	echo "<b>Select Courses</b>";
   	echo MultiSelect::widget([
    		'data' => ArrayHelper::map($courses->find()->all(), 'id', 'name'),
    		"options" => ['multiple'=>"multiple"],
    		'model'=>$model,
    		'attribute'=>'selectedCourses',
    		"clientOptions" =>
    		[
    				"includeSelectAllOption" => true,
    				'numberDisplayed' => 0,
    				'enableFiltering'=>true
    		],
    ]);
   
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
