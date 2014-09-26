<?php
/* @var $this DonanteController */
/* @var $model Donante */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Donante', 'url'=>array('index')),
	array('label'=>'Create Donante', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#donante-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Donantes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'donante-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'rut_donante',
		'primer_nombre_donante',
		'seg_nombre_donante',
		'apellido_paterno_donante',
		'apellido_materno_donante',
		'contrasena_donante',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
