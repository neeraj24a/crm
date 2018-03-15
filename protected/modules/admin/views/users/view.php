<div class="content-wrapper">
    <h3>User Details</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo $model->username; ?>
                    <div class="col-lg-2 pull-right">
                        <a href="<?php echo Yii::app()->createUrl("admin/users/update?id=" . $model->id); ?>" class="mb-sm btn btn-warning">Update</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <?php
                        if($model->role == 'admin'){
                            $model->relation = CHtml::link(CHtml::encode('Details'),array('admins/view','id'=>$model->relation));
                        } else if($model->role == 'company'){
                            $model->relation = CHtml::link(CHtml::encode('Details'),array('companies/view','id'=>$model->relation));
                        } else if($model->role == 'inspector'){
                            $model->relation = CHtml::link(CHtml::encode('Details'),array('inspector/view','id'=>$model->relation));
                        }
                        $this->widget('zii.widgets.CDetailView', array(
                            'data' => $model,
                            'htmlOptions' => array('class' => 'table table-striped table-bordered table-hover'),
                            'attributes' => array(
                                'username',
                                'role',
                                array(               // related city displayed as a link
                                    'label'=>'Relation',
                                    'type'=>'raw',
                                    'value'=>$model->relation,
                                ),
                                'last_visit',
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
