<div class="content-wrapper">
    <h3>Admin Details</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo $model->first_name . ' ' . $model->last_name; ?>
                    <div class="col-lg-2 pull-right">
                        <a href="<?php echo Yii::app()->createUrl("admin/admins/update?id=" . $model->id); ?>" class="mb-sm btn btn-warning">Update</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <?php
                        $this->widget('zii.widgets.CDetailView', array(
                            'data' => $model,
                            'htmlOptions' => array('class' => 'table table-striped table-bordered table-hover'),
                            'attributes' => array(
                                'first_name',
                                'last_name',
                                'address',
                                'city',
                                'state',
                                'zip',
                                'country',
                                'email',
                                'phone',
                                'position',
                                'is_active',
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>