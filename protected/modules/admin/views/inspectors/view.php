<?php
/* @var $this InspectorsController */
/* @var $model Inspectors */

$this->breadcrumbs=array(
	'Inspectors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Inspectors', 'url'=>array('index')),
	array('label'=>'Create Inspectors', 'url'=>array('create')),
	array('label'=>'Update Inspectors', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inspectors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inspectors', 'url'=>array('admin')),
);
?>

<h1>View Inspectors #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'web_enabled',
		'email',
		'phone',
		'phone2',
		'address',
		'city',
		'state',
		'zip',
		'country',
		'org',
		'url',
		'semi',
		'semi_from',
		'prev_agency',
		'prev_positions',
		'prev_years',
		'curr_employed',
		'curr_employer',
		'reg_travel_states',
		'reg_travel_countries',
		'expertise',
		'acct_name',
		'acct_num',
		'bank_name',
		'bank_address',
		'swift',
		'bic',
		'routing',
		'special_inst',
		'route',
		'assignments',
		'notes',
		'status',
		'deleted',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modified',
	),
)); ?>
