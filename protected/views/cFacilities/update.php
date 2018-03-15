<?php
/* @var $this CFacilitiesController */
/* @var $model CFacilities */

$this->breadcrumbs=array(
	'Cfacilities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CFacilities', 'url'=>array('index')),
	array('label'=>'Create CFacilities', 'url'=>array('create')),
	array('label'=>'View CFacilities', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CFacilities', 'url'=>array('admin')),
);
?>

<h1>Update CFacilities <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>