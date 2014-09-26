<?php
/* @var $this CentroMedicoController */
/* @var $model CentroMedico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rut_centro_medico'); ?>
		<?php echo $form->textField($model,'rut_centro_medico',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_centro_medico'); ?>
		<?php echo $form->textField($model,'nombre_centro_medico',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_centro_medico'); ?>
		<?php echo $form->textField($model,'direccion_centro_medico',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'e_mail_centro_medico'); ?>
		<?php echo $form->textField($model,'e_mail_centro_medico',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_fijo_centro_medico'); ?>
		<?php echo $form->textField($model,'telefono_fijo_centro_medico',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_area'); ?>
		<?php echo $form->textField($model,'cod_area',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->