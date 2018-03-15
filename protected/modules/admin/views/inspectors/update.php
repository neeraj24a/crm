<?php
/* @var $this InspectorsController */
/* @var $model Inspectors */

$this->breadcrumbs=array(
	'Inspectors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inspectors', 'url'=>array('index')),
	array('label'=>'Create Inspectors', 'url'=>array('create')),
	array('label'=>'View Inspectors', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Inspectors', 'url'=>array('admin')),
);
?>

<h1>Update Inspectors <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>