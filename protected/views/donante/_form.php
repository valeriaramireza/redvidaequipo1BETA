<?php
/* @var $this DonanteController */
/* @var $model Donante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'donante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_donante'); ?>
		<?php echo $form->textField($model,'rut_donante',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_nombre_donante'); ?>
		<?php echo $form->textField($model,'primer_nombre_donante',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'primer_nombre_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seg_nombre_donante'); ?>
		<?php echo $form->textField($model,'seg_nombre_donante',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'seg_nombre_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_paterno_donante'); ?>
		<?php echo $form->textField($model,'apellido_paterno_donante',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'apellido_paterno_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_materno_donante'); ?>
		<?php echo $form->textField($model,'apellido_materno_donante',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'apellido_materno_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena_donante'); ?>
		<?php echo $form->textField($model,'contrasena_donante',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'contrasena_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_de_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_de_nacimiento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fecha_de_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_fijo_donante'); ?>
		<?php echo $form->textField($model,'tel_fijo_donante',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'tel_fijo_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_movil_donante'); ?>
		<?php echo $form->textField($model,'tel_movil_donante',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tel_movil_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_donante'); ?>
		<?php echo $form->textField($model,'direccion_donante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_mail_donante'); ?>
		<?php echo $form->textField($model,'e_mail_donante',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'e_mail_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_donante'); ?>
		<?php echo $form->textArea($model,'tipo_donante',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tipo_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_sangre_donante'); ?>
		<?php echo $form->textField($model,'tipo_sangre_donante',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'tipo_sangre_donante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_area'); ?>
		<?php echo $form->textField($model,'cod_area',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cod_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alergia'); ?>
		<?php echo $form->textArea($model,'alergia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alergia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centro_medico'); ?>
		<?php echo $form->textField($model,'centro_medico',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'centro_medico'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->