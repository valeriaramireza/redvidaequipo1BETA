<?php
/* @var $this PacienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pacientes',
);

$this->menu=array(
	array('label'=>'Registrar Paciente', 'url'=>array('create')),
	array('label'=>'Buscar Paciente', 'url'=>array('admin')),
);
?>

<h1>Pacientes</h1>

<?php  //NO SE SI PONER ESTO:   
    /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>


