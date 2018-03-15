<?php
/* @var $this ARController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ars',
);

$this->menu=array(
	array('label'=>'Create AR', 'url'=>array('create')),
	array('label'=>'Manage AR', 'url'=>array('admin')),
);
?>

<h1>Ars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
