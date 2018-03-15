<?php
/* @var $this InspectorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inspectors',
);

$this->menu=array(
	array('label'=>'Create Inspectors', 'url'=>array('create')),
	array('label'=>'Manage Inspectors', 'url'=>array('admin')),
);
?>

<h1>Inspectors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
