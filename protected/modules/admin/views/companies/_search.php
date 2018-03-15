<?php
/* @var $this CompaniesController */
/* @var $model Companies */
/* @var $form CActiveForm */
?>
<div class="row">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>
	<div class="col-lg-12">
		<div class="col-lg-4">
			<?php echo $form->label($model, 'name'); ?>
			<?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->label($model, 'city'); ?>
			<?php echo $form->textField($model, 'city', array('class' => 'form-control')); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->label($model, 'state'); ?>
			<?php echo $form->textField($model, 'state', array('class' => 'form-control')); ?>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="col-lg-4">
			<?php echo $form->label($model, 'country'); ?>
			<?php echo $form->textField($model, 'country', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
		</div>
		<div class="col-lg-4">
			<?php echo $form->label($model, 'zip'); ?>
			<?php echo $form->textField($model, 'zip', array('size' => 60, 'maxlength' => 10, 'class' => 'form-control')); ?>
		</div>
	</div>
    <div class="col-lg-12 m-t-20">
        <?php echo CHtml::submitButton('Search', array('class' => 'mb-sm btn btn-success')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->