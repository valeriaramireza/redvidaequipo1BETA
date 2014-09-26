<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contactanos';
$this->breadcrumbs=array(
	'Contacto',
);
?>

<?php echo TbHtml::tabbableTabs(array(
    array('label' => 'Section 1', 'active' => true, 'content' => '..'),
    array('label' => 'Section 2', 'content' => '..'),
    array('label' => 'Section 3', 'content' => '...'),
), array('placement' => TbHtml::TABS_PLACEMENT_RIGHT)); ?>