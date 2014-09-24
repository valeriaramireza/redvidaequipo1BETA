<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1 align="center"><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS,'<strong>Well done!</strong> You successfully read this important alert message.');?>

<img src="images/holders.jpg" width="1500" height="50">
<p>Pedro modificó esto</p>
<p> Hernan Agrego esto</p>
<p> Cambio directo en </p>
<p> prueba agregar directo</p>
<p> y que pazaaa </p>
