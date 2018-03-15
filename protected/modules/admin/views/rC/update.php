<div class="content-wrapper">
    <h3>Update <?php echo $model->first; ?></h3>
    <div class="row">
        <div class="col-sm-12">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>