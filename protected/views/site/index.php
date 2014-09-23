<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1 align="center"><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS,'<strong>Well done!</strong> You successfully read this important alert message.');?>

<img src="images/holders.jpg" width="1500" height="50">
<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
