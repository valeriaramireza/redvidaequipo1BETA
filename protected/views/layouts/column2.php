<?php /* @var $this Controller */ ?>

<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="container" align="right">
	<div id="sidebar" align="right">
            
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operaciones',
		));
               
                
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>