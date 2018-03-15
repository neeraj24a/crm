<div class="content-wrapper">
    <h3>Facility Details</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo $model->name; ?>
                    <div class="col-lg-2 pull-right">
                        <a href="<?php echo Yii::app()->createUrl("admin/facilities/update?id=" . $model->id); ?>" class="mb-sm btn btn-warning">Update</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <?php
                        $this->widget('zii.widgets.CDetailView', array(
                            'data' => $model,
                            'htmlOptions' => array('class' => 'table table-striped table-bordered table-hover'),
                            'attributes' => array(
                                'name',
                                'address',
                                'address2',
                                'city',
                                'state',
                                'zip',
                                'country',
                                'lat',
                                'lng',
                                'region',
                                'insp_occur',
                                'insp_cost',
                                'overview',
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
