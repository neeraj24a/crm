<?php
/* @var $this FacilitiesController */
/* @var $model Facilities */

$this->breadcrumbs=array(
	'Facilities'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facilities', 'url'=>array('index')),
	array('label'=>'Create Facilities', 'url'=>array('create')),
	array('label'=>'View Facilities', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Facilities', 'url'=>array('admin')),
);
?>

<h1>Update Facilities <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>