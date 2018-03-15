<?php
/* @var $this InspectionsController */
/* @var $model Inspections */

$this->breadcrumbs=array(
	'Inspections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Inspections', 'url'=>array('index')),
	array('label'=>'Create Inspections', 'url'=>array('create')),
	array('label'=>'Update Inspections', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inspections', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inspections', 'url'=>array('admin')),
);
?>

<h1>View Inspections #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_id',
		'facility_id',
		'inspector',
		'insp_date',
		'issues',
		'resolved_status',
		'report',
		'notes',
		'attachment',
		'special',
		'initial',
		'status',
		'deleted',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modified',
	),
)); ?>
