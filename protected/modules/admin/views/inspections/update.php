<?php
/* @var $this InspectionsController */
/* @var $model Inspections */

$this->breadcrumbs=array(
	'Inspections'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inspections', 'url'=>array('index')),
	array('label'=>'Create Inspections', 'url'=>array('create')),
	array('label'=>'View Inspections', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Inspections', 'url'=>array('admin')),
);
?>

<h1>Update Inspections <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>