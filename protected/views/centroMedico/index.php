<?php
/* @var $this CentroMedicoController */
/* @var $dataProvider CActiveDataProvider */
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'Centros Medicos',
);

$this->menu=array(
	array('label'=>'Registrar Centro Médico', 'url'=>array('create')),
	array('label'=>'Gestionar Centro Médico', 'url'=>array('admin')),
);

?>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<h1>Centros Medicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 

?>
