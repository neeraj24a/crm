<?php
/* @var $this InspectorsController */
/* @var $model Inspectors */

$this->breadcrumbs=array(
	'Inspectors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inspectors', 'url'=>array('index')),
	array('label'=>'Manage Inspectors', 'url'=>array('admin')),
);
?>

<h1>Create Inspectors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>