<?php
/* @var $this RCController */
/* @var $model RC */
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
        <div class="col-lg-3">
            <?php echo $form->label($model, 'first'); ?>
            <?php echo $form->textField($model, 'first', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
        </div>
        <div class="col-lg-3">
            <?php echo $form->label($model, 'last'); ?>
            <?php echo $form->textField($model, 'last', array('class' => 'form-control')); ?>
        </div>
        <div class="col-lg-3">
            <?php echo $form->label($model, 'country'); ?>
            <?php echo $form->textField($model, 'country', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
        </div>
    </div>
    <div class="col-lg-12 m-t-20">
        <?php echo CHtml::submitButton('Search', array('class' => 'mb-sm btn btn-success')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->