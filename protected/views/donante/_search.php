<?php
/* @var $this DonanteController */
/* @var $model Donante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rut_donante'); ?>
		<?php echo $form->textField($model,'rut_donante',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_nombre_donante'); ?>
		<?php echo $form->textField($model,'primer_nombre_donante',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seg_nombre_donante'); ?>
		<?php echo $form->textField($model,'seg_nombre_donante',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_paterno_donante'); ?>
		<?php echo $form->textField($model,'apellido_paterno_donante',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_materno_donante'); ?>
		<?php echo $form->textField($model,'apellido_materno_donante',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrasena_donante'); ?>
		<?php echo $form->textField($model,'contrasena_donante',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_de_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_de_nacimiento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_fijo_donante'); ?>
		<?php echo $form->textField($model,'tel_fijo_donante',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_movil_donante'); ?>
		<?php echo $form->textField($model,'tel_movil_donante',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_donante'); ?>
		<?php echo $form->textField($model,'direccion_donante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'e_mail_donante'); ?>
		<?php echo $form->textField($model,'e_mail_donante',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_donante'); ?>
		<?php echo $form->textArea($model,'tipo_donante',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_sangre_donante'); ?>
		<?php echo $form->textField($model,'tipo_sangre_donante',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_area'); ?>
		<?php echo $form->textField($model,'cod_area',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alergia'); ?>
		<?php echo $form->textArea($model,'alergia',array('rows'=>6, 'cols'=>50)); ?>
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