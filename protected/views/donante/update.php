<?php
/* @var $this DonanteController */
/* @var $model Donante */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut_donante=>array('view','id'=>$model->rut_donante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donante', 'url'=>array('index')),
	array('label'=>'Create Donante', 'url'=>array('create')),
	array('label'=>'View Donante', 'url'=>array('view', 'id'=>$model->rut_donante)),
	array('label'=>'Manage Donante', 'url'=>array('admin')),
);
?>

<h1>Update Donante <?php echo $model->rut_donante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>