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
<h1><?php echo ucwords(CrugeTranslator::t("eliminar usuario"));?></h1>
<div class="form">
<?php
	/*
		$model:  es una instancia que implementa a ICrugeStoredUser
	*/
?>
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'crugestoreduser-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
)); ?>
<h2><?php echo $model->username; ?>
    <?php echo $model->email; ?>
</h2>
<p>
	<?php echo ucfirst(CrugeTranslator::t("marque la casilla para confirmar la eliminacion")); ?>
	<?php echo $form->checkBox($model,'deleteConfirmation'); ?>
	<?php echo $form->error($model,'deleteConfirmation'); ?>
</P>
<div class="row buttons">
	<?php Yii::app()->user->ui->tbutton("Eliminar Usuario"); ?>
	<?php Yii::app()->user->ui->bbutton("Volver",'cancelar'); ?>
</div>
<?php echo $form->errorSummary($model); ?>
<?php $this->endWidget(); ?>
</div>