<?php
/* @var $this CentroMedicoController */
/* @var $model CentroMedico */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	$model->rut_centro_medico,
);

$this->menu=array(
	array('label'=>'Ver Centro Médico', 'url'=>array('index')),
	array('label'=>'Crear Centro Médico', 'url'=>array('create')),
	array('label'=>'Actualizar Centro Médico', 'url'=>array('update', 'id'=>$model->rut_centro_medico)),
	array('label'=>'Eliminar Centro Médico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut_centro_medico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Centro Médico', 'url'=>array('admin')),
);
?>

<h1>Ver Centro Médico #<?php echo $model->rut_centro_medico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rut_centro_medico',
		'nombre_centro_medico',
		'direccion_centro_medico',
		'e_mail_centro_medico',
		'telefono_fijo_centro_medico',
		'cod_area',
	),
)); ?>
