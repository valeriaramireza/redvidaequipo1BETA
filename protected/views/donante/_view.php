<?php
/* @var $this DonanteController */
/* @var $data Donante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_donante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut_donante), array('view', 'id'=>$data->rut_donante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre_donante')); ?>:</b>
	<?php echo CHtml::encode($data->primer_nombre_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seg_nombre_donante')); ?>:</b>
	<?php echo CHtml::encode($data->seg_nombre_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_paterno_donante')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_paterno_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_materno_donante')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_materno_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena_donante')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_de_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_de_nacimiento); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_fijo_donante')); ?>:</b>
	<?php echo CHtml::encode($data->tel_fijo_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_movil_donante')); ?>:</b>
	<?php echo CHtml::encode($data->tel_movil_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_donante')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('e_mail_donante')); ?>:</b>
	<?php echo CHtml::encode($data->e_mail_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_donante')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_sangre_donante')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_sangre_donante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_area')); ?>:</b>
	<?php echo CHtml::encode($data->cod_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alergia')); ?>:</b>
	<?php echo CHtml::encode($data->alergia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centro_medico')); ?>:</b>
	<?php echo CHtml::encode($data->centro_medico); ?>
	<br />

	*/ ?>

</div>