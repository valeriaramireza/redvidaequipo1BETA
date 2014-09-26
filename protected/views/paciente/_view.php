<?php
/* @var $this PacienteController */
/* @var $data Paciente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_paciente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut_paciente), array('view', 'id'=>$data->rut_paciente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->primer_nombre_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seg_nombre_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->seg_nombre_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_de_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_de_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_movil_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->tel_movil_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_fijo_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->tel_fijo_paciente); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('e_mail_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->e_mail_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afiliacion')); ?>:</b>
	<?php echo CHtml::encode($data->afiliacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedad')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grado_de_urgencia')); ?>:</b>
	<?php echo CHtml::encode($data->grado_de_urgencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('necesidad_de_trasplante')); ?>:</b>
	<?php echo CHtml::encode($data->necesidad_de_trasplante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_de_sangre_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_de_sangre_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_paterno_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_paterno_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_materno_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_materno_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_area')); ?>:</b>
	<?php echo CHtml::encode($data->cod_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centro_medico')); ?>:</b>
	<?php echo CHtml::encode($data->centro_medico); ?>
	<br />

	*/ ?>

</div>