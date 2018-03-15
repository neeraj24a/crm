<?php
/* @var $this RCController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rcs',
);

$this->menu=array(
	array('label'=>'Create RC', 'url'=>array('create')),
	array('label'=>'Manage RC', 'url'=>array('admin')),
);
?>

<h1>Rcs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
