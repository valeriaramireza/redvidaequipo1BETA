<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->rut_paciente=>array('view','id'=>$model->rut_paciente),
	'Update',
);

$this->menu=array(
	array('label'=>'Paciente', 'url'=>array('index')),
	array('label'=>'Registrar Paciente', 'url'=>array('create')),
	//array('label'=>'Ver Datos Paciente', 'url'=>array('view', 'id'=>$model->rut_paciente)),
	array('label'=>'Buscar Paciente', 'url'=>array('admin')),
);
?>

<h1>Modificar Paciente <?php echo $model->rut_paciente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>