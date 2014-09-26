<?php
/* @var $this CentroMedicoController */
/* @var $model CentroMedico */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	$model->rut_centro_medico=>array('view','id'=>$model->rut_centro_medico),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Ver Centros Médicos', 'url'=>array('index')),
	array('label'=>'Crear Centro Médico', 'url'=>array('create')),
	array('label'=>'Ver Centro Médico', 'url'=>array('view', 'id'=>$model->rut_centro_medico)),
	array('label'=>'Gestionar Centro Médico', 'url'=>array('admin')),
);
?>

<h1>Actualizar Centro Médico <?php echo $model->rut_centro_medico; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>