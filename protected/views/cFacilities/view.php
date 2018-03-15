<?php
/* @var $this CFacilitiesController */
/* @var $model CFacilities */

$this->breadcrumbs=array(
	'Cfacilities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CFacilities', 'url'=>array('index')),
	array('label'=>'Create CFacilities', 'url'=>array('create')),
	array('label'=>'Update CFacilities', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CFacilities', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CFacilities', 'url'=>array('admin')),
);
?>

<h1>View CFacilities #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company',
		'facility',
		'type',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modified',
		'status',
		'deleted',
	),
)); ?>
