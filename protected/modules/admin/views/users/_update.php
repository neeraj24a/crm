<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>
<div class="panel panel-default">
    <div class="panel-heading">Users Form</div>
    <div class="panel-body">
        <div class="row">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'users-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>true,
    )); ?>
			<div class="col-lg-12">
				<div class="col-lg-6">
					<div class="form-group">
						<?php echo $form->labelEx($model,'username'); ?>
						<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128,'class'=>'form-control','disabled'=>'disabled')); ?>
						<?php echo $form->error($model,'username'); ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<?php echo $form->labelEx($model,'role'); ?>
						<?php echo $form->dropDownList($model,'role',getParam('roles'),array('empty' => 'Select Role','class'=>'form-control', 'ajax' => array(
						'type'=>'POST', //request type
						'url'=>CController::createUrl('users/loadrelation'), //url to call.
						'data'=>array('role'=>'js:this.value'),
						'update'=>'#Users_relation', //selector to update
						))); ?>
						<?php echo $form->error($model,'role'); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="col-lg-6">
					<div class="form-group">
						<?php echo $form->labelEx($model,'relation'); ?>
						<?php echo $form->dropDownList($model,'relation',array(),array('empty'=>'Select Relation','class'=>'form-control')); ?>
						<?php echo $form->error($model,'relation'); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-12 m-t-20">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'mb-sm btn btn-info')); ?>
				<a href="<?php echo Yii::app()->createUrl("admin/users"); ?>" class="mb-sm btn btn-warning pull-right">Back</a>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
<script>
$(function($) {
	$.ajax({
		'type':'POST',
		'url':'<?php echo Yii::app()->createUrl("admin/users/loadrelation"); ?>',
		'data':{'role': '<?php echo $model->relation; ?>'},
		'cache':false,
		'success':function(html){
			$("#Users_relation").html(html);
			$("#Users_relation").val('<?php echo $model->relation; ?>');
		}
	});
});

</script>
