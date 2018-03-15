<?php
/* @var $this ARController */
/* @var $model AR */
/* @var $form CActiveForm */
?>
<div class="panel panel-default">
    <div class="panel-heading">Account Representative Addition Form</div>
    <div class="panel-body">
        <div class="row">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'rc-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>true,
			)); ?>
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'first'); ?>
                            <?php echo $form->textField($model,'first',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'first'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'last'); ?>
                            <?php echo $form->textField($model,'last',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'last'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'address'); ?>
                            <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'address'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'city'); ?>
                            <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'city'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'state'); ?>
                            <?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'state'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'zip'); ?>
                            <?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'zip'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'country'); ?>
                            <?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'country'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'email'); ?>
                            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'email'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'phone'); ?>
                            <?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>12,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'phone'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'phone2'); ?>
                            <?php echo $form->textField($model,'phone2',array('size'=>60,'maxlength'=>12,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'phone2'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'assignments'); ?>
                            <?php echo $form->textField($model,'assignments',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'assignments'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'notes'); ?>
                            <?php echo $form->textArea($model,'notes',array('maxlength'=>999,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'notes'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 m-t-20">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'mb-sm btn btn-info')); ?>
                    <a href="<?php echo Yii::app()->createUrl("admin/aR"); ?>" class="mb-sm btn btn-warning pull-right">Back</a>
                </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>