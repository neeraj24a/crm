<?php
/* @var $this FacilitiesController */
/* @var $model Facilities */

$this->breadcrumbs=array(
	'Facilities'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Facilities', 'url'=>array('index')),
	array('label'=>'Create Facilities', 'url'=>array('create')),
	array('label'=>'Update Facilities', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Facilities', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facilities', 'url'=>array('admin')),
);
?>

<h1>View Facilities #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'address2',
		'city',
		'state',
		'zip',
		'country',
		'lat',
		'lng',
		'region',
		'insp_occur',
		'insp_cost',
		'overview',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modified',
		'status',
		'deleted',
	),
)); ?>
