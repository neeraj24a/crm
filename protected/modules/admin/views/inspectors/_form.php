<?php
/* @var $this InspectorsController */
/* @var $model Inspectors */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inspectors-form',
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
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'web_enabled'); ?>
		<?php echo $form->textField($model,'web_enabled'); ?>
		<?php echo $form->error($model,'web_enabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone2'); ?>
		<?php echo $form->textField($model,'phone2',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'phone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip'); ?>
		<?php echo $form->textField($model,'zip',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'org'); ?>
		<?php echo $form->textField($model,'org',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'org'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semi'); ?>
		<?php echo $form->textField($model,'semi'); ?>
		<?php echo $form->error($model,'semi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semi_from'); ?>
		<?php echo $form->textField($model,'semi_from',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'semi_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prev_agency'); ?>
		<?php echo $form->textField($model,'prev_agency',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prev_agency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prev_positions'); ?>
		<?php echo $form->textField($model,'prev_positions',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prev_positions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prev_years'); ?>
		<?php echo $form->textField($model,'prev_years',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prev_years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_employed'); ?>
		<?php echo $form->textField($model,'curr_employed'); ?>
		<?php echo $form->error($model,'curr_employed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_employer'); ?>
		<?php echo $form->textField($model,'curr_employer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'curr_employer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reg_travel_states'); ?>
		<?php echo $form->textField($model,'reg_travel_states',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reg_travel_states'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reg_travel_countries'); ?>
		<?php echo $form->textField($model,'reg_travel_countries',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reg_travel_countries'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expertise'); ?>
		<?php echo $form->textField($model,'expertise',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'expertise'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acct_name'); ?>
		<?php echo $form->textField($model,'acct_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'acct_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acct_num'); ?>
		<?php echo $form->textField($model,'acct_num',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'acct_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bank_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_address'); ?>
		<?php echo $form->textField($model,'bank_address',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bank_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'swift'); ?>
		<?php echo $form->textField($model,'swift',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'swift'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bic'); ?>
		<?php echo $form->textField($model,'bic',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'routing'); ?>
		<?php echo $form->textField($model,'routing',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'routing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special_inst'); ?>
		<?php echo $form->textField($model,'special_inst',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'special_inst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route'); ?>
		<?php echo $form->textField($model,'route',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'route'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assignments'); ?>
		<?php echo $form->textField($model,'assignments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'assignments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'notes'); ?>
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