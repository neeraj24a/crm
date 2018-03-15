<?php
/* @var $this FacilitiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facilities',
);

$this->menu=array(
	array('label'=>'Create Facilities', 'url'=>array('create')),
	array('label'=>'Manage Facilities', 'url'=>array('admin')),
);
?>

<h1>Facilities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
