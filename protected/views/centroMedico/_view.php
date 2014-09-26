<?php
/* @var $this CentroMedicoController */
/* @var $data CentroMedico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_centro_medico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut_centro_medico), array('view', 'id'=>$data->rut_centro_medico)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_centro_medico')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_centro_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_centro_medico')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_centro_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('e_mail_centro_medico')); ?>:</b>
	<?php echo CHtml::encode($data->e_mail_centro_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_fijo_centro_medico')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_fijo_centro_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_area')); ?>:</b>
	<?php echo CHtml::encode($data->cod_area); ?>
	<br />


</div>