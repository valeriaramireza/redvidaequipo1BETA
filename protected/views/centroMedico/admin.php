<?php
/* @var $this CentroMedicoController */
/* @var $model CentroMedico */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Ver Centros Médicos', 'url'=>array('index')),
	array('label'=>'Crear Centros Médicos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#centro-medico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Centros Médicos</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'centro-medico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'rut_centro_medico',
		'nombre_centro_medico',
		'direccion_centro_medico',
		'e_mail_centro_medico',
		'telefono_fijo_centro_medico',
		'cod_area',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
