<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="row">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>
    <div class="col-lg-4">
        <?php echo $form->label($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
    </div>
    <div class="col-lg-4">
        <?php echo $form->label($model, 'role'); ?>
        <?php echo $form->textField($model, 'role', array('size' => 60, 'maxlength' => 10, 'class' => 'form-control')); ?>
    </div>
    <div class="col-lg-4">
        <?php echo $form->label($model, 'status'); ?>
        <?php echo $form->textField($model, 'status', array('class' => 'form-control')); ?>
    </div>
    <div class="col-lg-12 m-t-20">
        <?php echo CHtml::submitButton('Search', array('class' => 'mb-sm btn btn-success')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->