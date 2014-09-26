<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Paciente', 'url'=>array('index')),
	array('label'=>'Buscar Paciente', 'url'=>array('admin')),
);
?>

<h1>Registrar Paciente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>