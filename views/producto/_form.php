<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true, 'placeholder' => 'ej. Agua Ciel']) ?>

    <?= $form->field($model, 'Descripcion')->textInput(['maxlength' => true, 'placeholder' => 'Escribe una descripción']) ?>

    <?= $form->field($model, 'Precio')->textInput(['maxlength' => true, 'ej. 12']) ?>

    <?= $form->field($model, 'Costo')->textInput(['maxlength' => true, 'ej. 11.5']) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
