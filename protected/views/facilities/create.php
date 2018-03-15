<?php
/* @var $this FacilitiesController */
/* @var $model Facilities */

$this->breadcrumbs=array(
	'Facilities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Facilities', 'url'=>array('index')),
	array('label'=>'Manage Facilities', 'url'=>array('admin')),
);
?>

<h1>Create Facilities</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>