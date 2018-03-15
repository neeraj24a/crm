<?php
/* @var $this AdminsController */
/* @var $model Admins */
/* @var $form CActiveForm */
?>
<div class="panel panel-default">
    <div class="panel-heading">Admins Addition Form</div>
    <div class="panel-body">
        <div class="row">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'admins-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>true,
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $form->labelEx($model,'first_name'); ?>
                    <?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'first_name'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $form->labelEx($model,'last_name'); ?>
                    <?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'last_name'); ?>
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
                        <?php echo $form->labelEx($model,'country'); ?>
                        <?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                        <?php echo $form->error($model,'country'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'zip'); ?>
                        <?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                        <?php echo $form->error($model,'zip'); ?>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'email'); ?>
                        <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                        <?php echo $form->error($model,'email'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'phone'); ?>
                        <?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>16,'class'=>'form-control')); ?>
                        <?php echo $form->error($model,'phone'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'position'); ?>
                        <?php echo $form->textField($model,'position',array('class'=>'form-control')); ?>
                        <?php echo $form->error($model,'position'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'is_active'); ?>
                        <?php echo $form->dropDownList($model,'is_active',array('yes'=>'Yes','no'=>'No'),array('class'=>'form-control')); ?>
                        <?php echo $form->error($model,'is_active'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 m-t-20">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'mb-sm btn btn-info')); ?>
                <a href="<?php echo Yii::app()->createUrl("admin/admins"); ?>" class="mb-sm btn btn-warning pull-right">Back</a>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>