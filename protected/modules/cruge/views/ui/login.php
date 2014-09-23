<h1 style="width: 225px; margin: auto"><?php echo CrugeTranslator::t('logon',"Login"); ?></h1>
<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('loginflash'); ?>
</div>
<?php else: ?>

<!-- <div class="form"> -->
<div class="login-fields">
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
            <label for="username">Usuario:</label>
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username', array('class' => 'form-control input-lg username-field', 'placeholder'=>'RUT' )); ?>
			<?php echo $form->error($model,'username', array('class'=>'errorMessage')); ?>
		</div>

		<div class="field">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password', array('class' => 'form-control input-lg password-field', 'placeholder'=>'Clave' )); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
	</div>

	<div class="row-fluid" style="width: 225px; margin: auto">
		<?php //echo $form->checkBox($model,'rememberMe', array('style'=>'float:left;')); ?>
		<?php //echo $form->label($model,'rememberMe', array('style'=>'margin-left: 20px;')); ?>
		<?php //echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="login-actions">
		<button class="login-action btn btn-primary">Conectar</button>
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
