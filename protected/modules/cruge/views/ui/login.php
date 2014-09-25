
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

<div><h1>&nbsp;</h1></div>
<div><h1>&nbsp;</h1></div>
<h1 align="center"><?php echo TbHtml::lead('Iniciar Sesion'); ?></h1>
<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('loginflash'); ?>
</div>
<?php else: ?>

<!-- <div class="form"> -->
<div class="login-fields" align="center">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'logon-form',
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>



	<!--<div class="row">-->
	<div class = "login-fields">
		<!-- <p style="text-align: center;">Ingreso de Usuarios:</p> -->
		</br>
		<div class="field">
            <label for="username"></label>
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username', array('class' => 'form-control input-lg username-field', 'placeholder'=>'RUT: 17.590.890-0' )); ?>
			<?php echo $form->error($model,'username', array('class'=>'errorMessage')); ?>
		</div>

		<div class="field">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password', array('class' => 'form-control input-lg password-field', 'placeholder'=>'*********' )); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
	</div>

	<div class="row-fluid" style="width: 225px; margin: auto">
		<?php //echo $form->checkBox($model,'rememberMe', array('style'=>'float:left;')); ?>
		<?php //echo $form->label($model,'rememberMe', array('style'=>'margin-left: 20px;')); ?>
		<?php //echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="login-actions">
		<button class="login-action btn btn-primary">Iniciar</button>
	</div>

	

	<?php
		//	si el componente CrugeConnector existe lo usa:
		//
		if(Yii::app()->getComponent('crugeconnector') != null){
		if(Yii::app()->crugeconnector->hasEnabledClients){ 
	?>
	<div class='crugeconnector'>
		<span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
		<ul>
		<?php 
			$cc = Yii::app()->crugeconnector;
			foreach($cc->enabledClients as $key=>$config){
				$image = CHtml::image($cc->getClientDefaultImage($key));
				echo "<li>".CHtml::link($image,
					$cc->getClientLoginUrl($key))."</li>";
			}
		?>
		</ul>
	</div>
	<?php }} ?>
	

<?php $this->endWidget(); ?>
</div> 
<?php endif; ?>
