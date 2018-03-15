<?php
/* @var $this InspectionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inspections',
);

$this->menu=array(
	array('label'=>'Create Inspections', 'url'=>array('create')),
	array('label'=>'Manage Inspections', 'url'=>array('admin')),
);
?>

<h1>Inspections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
