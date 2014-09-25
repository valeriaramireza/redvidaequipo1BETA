<?php Yii::app()->bootstrap->register(); ?>
<div class="container" id="page">

	<div id="header">
            <div id="logo"><h1></h1></div>
	</div><!-- header -->
        
<div id="mainmenu">



		<?php $this->widget('bootstrap.widgets.TbNav', array(
        'type' => TbHtml::NAV_TYPE_TABS,
		'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Quienes Somos', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
				//array('label'=>'Pacientes','url'=>array('/paciente'), 'visible'=>Yii::app()->user->checkAccess('Paciente') && !Yii::app()->user->checkAccess('admin')),
				array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
					, 'visible'=>Yii::app()->user->name=='admin'),
				array('label'=>'Cerrar Sesión ('.Yii::app()->user->name.')'
					, 'url'=>Yii::app()->user->ui->logoutUrl
					, 'visible'=>!Yii::app()->user->isGuest),
					
					
			),
		)); ?>
				
	</div><!-- mainmenu -->
</div>
<div class="form">
<h1><?php echo ucwords(CrugeTranslator::t("campos personalizados"));?></h1>

<?php echo Yii::app()->user->ui->getFieldAdminCreateLink(CrugeTranslator::t("Crear un nuevo Campo Personalizado")); ?>

<?php 
$cols = array();
// presenta los campos de ICrugeField
foreach(Yii::app()->user->um->getSortFieldNamesForICrugeField() as $key=>$fieldName){
	$value=null;
	if($fieldName == 'required')
		$value = '$data->getRequiredName()';
	$cols[] = array('name'=>$fieldName,'value'=>$value);
}
$cols[] = array(
	'class'=>'CButtonColumn',
	'template' => '{update} {delete}',
	'deleteConfirmation'=>CrugeTranslator::t("Esta seguro de eliminar este campo ?"),
	'buttons' => array(
			'update'=>array(
				'label'=>CrugeTranslator::t("editar campo"),
				'url'=>'array("fieldsadminupdate","id"=>$data->getPrimaryKey())'
			),
			'delete'=>array(
				'label'=>CrugeTranslator::t("eliminar campo"),
				'url'=>'array("fieldsadmindelete","id"=>$data->getPrimaryKey())'
			),
		),	
);
$this->widget(Yii::app()->user->ui->CGridViewClass, array(
    'dataProvider'=>$dataProvider,
    'columns'=>$cols,
	'filter'=>$model,
));
?>
</div>