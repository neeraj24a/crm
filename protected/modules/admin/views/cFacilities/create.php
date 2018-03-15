<?php
/* @var $this CFacilitiesController */
/* @var $model CFacilities */

$this->breadcrumbs=array(
	'Cfacilities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CFacilities', 'url'=>array('index')),
	array('label'=>'Manage CFacilities', 'url'=>array('admin')),
);
?>

<h1>Create CFacilities</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>