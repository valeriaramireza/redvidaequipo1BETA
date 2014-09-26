<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rut_paciente'); ?>
		<?php echo $form->textField($model,'rut_paciente',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_nombre_paciente'); ?>
		<?php echo $form->textField($model,'primer_nombre_paciente',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seg_nombre_paciente'); ?>
		<?php echo $form->textField($model,'seg_nombre_paciente',array('size'=>60,'maxlength'=>60)); ?>
	</div>
        
        <div class="row">
		<?php echo $form->label($model,'apellido_paterno_paciente'); ?>
		<?php echo $form->textField($model,'apellido_paterno_paciente',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_materno_paciente'); ?>
		<?php echo $form->textField($model,'apellido_materno_paciente',array('size'=>60,'maxlength'=>60)); ?>
	</div>
    
	<div class="row">
		<?php echo $form->label($model,'fecha_de_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_de_nacimiento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_paciente'); ?>
		<?php echo $form->textField($model,'direccion_paciente',array('size'=>50,'maxlength'=>50)); ?>
	</div>
        
	<div class="row">
		<?php echo $form->label($model,'tel_movil_paciente'); ?>
		<?php echo $form->textField($model,'tel_movil_paciente',array('size'=>8,'maxlength'=>8)); ?>
	</div>

        <div class="row">
		<?php echo $form->label($model,'cod_area'); ?>
		<?php echo $form->textField($model,'cod_area',array('size'=>8,'maxlength'=>8)); ?>
	</div>
    
	<div class="row">
		<?php echo $form->label($model,'tel_fijo_paciente'); ?>
		<?php echo $form->textField($model,'tel_fijo_paciente',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'e_mail_paciente'); ?>
		<?php echo $form->textField($model,'e_mail_paciente',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afiliacion'); ?>
		<?php echo $form->textField($model,'afiliacion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfermedad'); ?>
		<?php echo $form->textField($model,'enfermedad',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grado_de_urgencia'); ?>
		<?php echo $form->textField($model,'grado_de_urgencia',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'necesidad_de_trasplante'); ?>
		<?php echo $form->textArea($model,'necesidad_de_trasplante',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_de_sangre_paciente'); ?>
		<?php echo $form->textField($model,'tipo_de_sangre_paciente',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centro_medico'); ?>
		<?php echo $form->textField($model,'centro_medico',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->