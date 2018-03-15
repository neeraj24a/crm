<?php
/* @var $this InspectionsController */
/* @var $model Inspections */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inspections-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facility_id'); ?>
		<?php echo $form->textField($model,'facility_id',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'facility_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inspector'); ?>
		<?php echo $form->textField($model,'inspector',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'inspector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insp_date'); ?>
		<?php echo $form->textField($model,'insp_date'); ?>
		<?php echo $form->error($model,'insp_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'issues'); ?>
		<?php echo $form->textField($model,'issues'); ?>
		<?php echo $form->error($model,'issues'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resolved_status'); ?>
		<?php echo $form->textField($model,'resolved_status',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'resolved_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report'); ?>
		<?php echo $form->textField($model,'report',array('size'=>60,'maxlength'=>9999)); ?>
		<?php echo $form->error($model,'report'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>999)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attachment'); ?>
		<?php echo $form->textField($model,'attachment',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'attachment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special'); ?>
		<?php echo $form->textField($model,'special'); ?>
		<?php echo $form->error($model,'special'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initial'); ?>
		<?php echo $form->textField($model,'initial'); ?>
		<?php echo $form->error($model,'initial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted'); ?>
		<?php echo $form->textField($model,'deleted'); ?>
		<?php echo $form->error($model,'deleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'modified_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_entered'); ?>
		<?php echo $form->textField($model,'date_entered'); ?>
		<?php echo $form->error($model,'date_entered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_modified'); ?>
		<?php echo $form->textField($model,'date_modified'); ?>
		<?php echo $form->error($model,'date_modified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->