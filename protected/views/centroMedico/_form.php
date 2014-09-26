<?php
/* @var $this CentroMedicoController */
/* @var $model CentroMedico */
/* @var $form CActiveForm */
?>
<br><br>
<div class="container-fluid">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'centro-medico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_centro_medico'); ?>
		<?php echo $form->textField($model,'rut_centro_medico',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut_centro_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_centro_medico'); ?>
		<?php echo $form->textField($model,'nombre_centro_medico',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre_centro_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_centro_medico'); ?>
		<?php echo $form->textField($model,'direccion_centro_medico',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion_centro_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_mail_centro_medico'); ?>
		<?php echo $form->textField($model,'e_mail_centro_medico',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'e_mail_centro_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_fijo_centro_medico'); ?>
		<?php echo $form->textField($model,'telefono_fijo_centro_medico',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'telefono_fijo_centro_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_area'); ?>
		<?php echo $form->textField($model,'cod_area',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cod_area'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>