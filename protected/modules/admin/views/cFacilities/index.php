<?php
/* @var $this CFacilitiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cfacilities',
);

$this->menu=array(
	array('label'=>'Create CFacilities', 'url'=>array('create')),
	array('label'=>'Manage CFacilities', 'url'=>array('admin')),
);
?>

<h1>Cfacilities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
