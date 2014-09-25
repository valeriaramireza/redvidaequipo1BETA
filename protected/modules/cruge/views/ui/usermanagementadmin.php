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
<h1><?php echo ucwords(CrugeTranslator::t('admin', 'Gestionar Usuarios'));?></h1>
<?php 
/*
	para darle los atributos al CGridView de forma de ser consistente con el sistema Cruge
	es mejor preguntarle al Factory por los atributos disponibles, esto es porque si se decide
	cambiar la clase de CrugeStoredUser por otra entonces asi no haya dependenci directa a los
	campos.
*/
$cols = array();

// presenta los campos de ICrugeStoredUser
foreach(Yii::app()->user->um->getSortFieldNamesForICrugeStoredUser() as $key=>$fieldName){
	$value=null; // default
	$filter=null; // default, textbox
	$type='text';
	if($fieldName == 'state'){
		$value = '$data->getStateName()';
		$filter = Yii::app()->user->um->getUserStateOptions();
	}
	if($fieldName == 'logondate'){
		$type='datetime';
	}
	$cols[] = array('name'=>$fieldName,'value'=>$value,'filter'=>$filter,'type'=>$type);
}
	
$cols[] = array(
	'class'=>'CButtonColumn',
	
	'template' => '{update} {eliminar}',
	'deleteConfirmation'=>CrugeTranslator::t('admin', 'Are you sure you want to delete this user'),
	'buttons' => array(
			'update'=>array(
				'label'=>CrugeTranslator::t('admin', 'Actualizar Usuario'),
				'url'=>'array("usermanagementupdate","id"=>$data->getPrimaryKey())'
			),
			'eliminar'=>array(
				'label'=>CrugeTranslator::t('admin', 'Eliminar Usuario'),
				'imageUrl'=>Yii::app()->user->ui->getResource("delete.png"),
				'url'=>'array("usermanagementdelete","id"=>$data->getPrimaryKey())'
			),
		),	
);
$this->widget(Yii::app()->user->ui->CGridViewClass, 
	array(
    'dataProvider'=>$dataProvider,
    'columns'=>$cols,
	'filter'=>$model,
));
?>
</div>