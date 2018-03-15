<div class="content-wrapper">
    <h3>Update <?php echo $model->first_name.' '.$model->last_name; ?></h3>
    <div class="row">
        <div class="col-sm-12">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>