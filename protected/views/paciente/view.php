<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->rut_paciente,
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Create Paciente', 'url'=>array('create')),
	array('label'=>'Update Paciente', 'url'=>array('update', 'id'=>$model->rut_paciente)),
	array('label'=>'Delete Paciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut_paciente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1>View Paciente #<?php echo $model->rut_paciente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rut_paciente',
		'primer_nombre_paciente',
		'seg_nombre_paciente',
		'fecha_de_nacimiento',
		'direccion_paciente',
		'tel_movil_paciente',
		'tel_fijo_paciente',
		'e_mail_paciente',
		'afiliacion',
		'enfermedad',
		'grado_de_urgencia',
		'necesidad_de_trasplante',
		'tipo_de_sangre_paciente',
		'apellido_paterno_paciente',
		'apellido_materno_paciente',
		'cod_area',
		'centro_medico',
	),
)); ?>
