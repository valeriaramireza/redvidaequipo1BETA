<?php
/* @var $this CentroMedicoController */
/* @var $model CentroMedico */

$this->breadcrumbs=array(
	'Centros Médicos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Ver Centros Médicos', 'url'=>array('index')),
	array('label'=>'Gestionar Centros Médicos', 'url'=>array('admin')),
);
?>

<h1>Crear Centro Médico</h1>
<div class="container-fluid">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>