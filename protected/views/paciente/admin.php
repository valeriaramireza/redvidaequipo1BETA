<?php
/* @var $this PacienteController */
/* @var $model Paciente */
//MOSTRAR PACIENTES   -> llama a:  _search
$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Manage',
);

$this->menu=array(
        array('label'=>'Paciente', 'url'=>array('index')),
	array('label'=>'Registrar Paciente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paciente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Busqueda Pacientes</h1>

<p> </p>
<p>
Filtrar busqueda en celdas
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'paciente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'rut_paciente',
		'primer_nombre_paciente',
		'apellido_paterno_paciente',
		'apellido_materno_paciente',
		'fecha_de_nacimiento',
		'enfermedad',
		'grado_de_urgencia',
		/*
		'tel_fijo_paciente',
		'e_mail_paciente',
		'afiliacion',
		'enfermedad',
		'grado_de_urgencia',
		'necesidad_de_trasplante',
		'tipo_de_sangre_paciente',
                'direccion_paciente',
		'tel_movil_paciente',
                'seg_nombre_paciente',
		'cod_area',
		'centro_medico',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
