<?php
/* @var $this InspectionsController */
/* @var $model Inspections */

$this->breadcrumbs=array(
	'Inspections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inspections', 'url'=>array('index')),
	array('label'=>'Manage Inspections', 'url'=>array('admin')),
);
?>

<h1>Create Inspections</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>