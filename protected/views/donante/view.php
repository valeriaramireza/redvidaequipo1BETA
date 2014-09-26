<?php
/* @var $this DonanteController */
/* @var $model Donante */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut_donante,
);

$this->menu=array(
	array('label'=>'List Donante', 'url'=>array('index')),
	array('label'=>'Create Donante', 'url'=>array('create')),
	array('label'=>'Update Donante', 'url'=>array('update', 'id'=>$model->rut_donante)),
	array('label'=>'Delete Donante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut_donante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donante', 'url'=>array('admin')),
);
?>

<h1>View Donante #<?php echo $model->rut_donante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rut_donante',
		'primer_nombre_donante',
		'seg_nombre_donante',
		'apellido_paterno_donante',
		'apellido_materno_donante',
		'contrasena_donante',
		'fecha_de_nacimiento',
		'tel_fijo_donante',
		'tel_movil_donante',
		'direccion_donante',
		'e_mail_donante',
		'tipo_donante',
		'tipo_sangre_donante',
		'cod_area',
		'alergia',
		'centro_medico',
	),
)); ?>
