<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Celdas con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_paciente'); ?>
		<?php echo $form->textField($model,'rut_paciente',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_nombre_paciente'); ?>
		<?php echo $form->textField($model,'primer_nombre_paciente',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'primer_nombre_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seg_nombre_paciente'); ?>
		<?php echo $form->textField($model,'seg_nombre_paciente',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'seg_nombre_paciente'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'apellido_paterno_paciente'); ?>
		<?php echo $form->textField($model,'apellido_paterno_paciente',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'apellido_paterno_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_materno_paciente'); ?>
		<?php echo $form->textField($model,'apellido_materno_paciente',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'apellido_materno_paciente'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'fecha_de_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_de_nacimiento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fecha_de_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_paciente'); ?>
		<?php echo $form->textField($model,'direccion_paciente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_movil_paciente'); ?>
		<?php echo $form->textField($model,'tel_movil_paciente',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'tel_movil_paciente'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'cod_area'); ?>
		<?php echo $form->textField($model,'cod_area',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cod_area'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'tel_fijo_paciente'); ?>
		<?php echo $form->textField($model,'tel_fijo_paciente',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'tel_fijo_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_mail_paciente'); ?>
		<?php echo $form->textField($model,'e_mail_paciente',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'e_mail_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afiliacion'); ?>
		<?php echo $form->textField($model,'afiliacion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'afiliacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enfermedad'); ?>
		<?php echo $form->textField($model,'enfermedad',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'enfermedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grado_de_urgencia'); ?>
		<?php echo $form->textField($model,'grado_de_urgencia',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'grado_de_urgencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'necesidad_de_trasplante'); ?>
		<?php echo $form->textArea($model,'necesidad_de_trasplante',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'necesidad_de_trasplante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_de_sangre_paciente'); ?>
		<?php echo $form->textField($model,'tipo_de_sangre_paciente',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'tipo_de_sangre_paciente'); ?>
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