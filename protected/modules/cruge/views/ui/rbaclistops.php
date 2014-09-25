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
<h1><?php echo ucwords(CrugeTranslator::t("operaciones"));?></h1>

<div class='auth-item-create-button'>
<?php echo CHtml::link(CrugeTranslator::t("Crear Nueva Operacion")
	,Yii::app()->user->ui->getRbacAuthItemCreateUrl(CAuthItem::TYPE_OPERATION));?>
</div>

<?php 
	echo CrugeTranslator::t("Filtrar por Controlador:");
	$ar = array(
		'0'=>CrugeTranslator::t('Ver Todo'),
		'1'=>CrugeTranslator::t('Otras'),
		'2'=>CrugeTranslator::t('Cruge'),
		//'3'=>CrugeTranslator::t('Controladoras'),
	);
	foreach(Yii::app()->user->rbac->enumControllers() as $c)
		$ar[$c] = $c;
	// build list
	echo "<ul class='cruge_filters'>";
	foreach($ar as $filter=>$text)
		echo "<li>".CHtml::link($text, array('/cruge/ui/rbaclistops',
			'filter'=>$filter))."</li>";
	echo "</ul>";
?>

<?php $this->renderPartial('_listauthitems'
	,array('dataProvider'=>$dataProvider)
	,false
	);?>
