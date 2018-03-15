<?php
/* @var $this AdminsController */
/* @var $model Admins */
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
        <div class="col-lg-6">
            <?php echo $form->label($model, 'first_name'); ?>
            <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
        </div>
        <div class="col-lg-6">
            <?php echo $form->label($model, 'last_name'); ?>
            <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 10, 'class' => 'form-control')); ?>
        </div>
    </div>
    <div class="col-lg-12 m-t-20">
        <?php echo CHtml::submitButton('Search', array('class' => 'mb-sm btn btn-success')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->