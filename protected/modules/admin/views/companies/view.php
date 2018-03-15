<div class="content-wrapper">
    <h3>Company Details</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo $model->name; ?>
                    <div class="col-lg-6 pull-right">
                        <a href="<?php echo Yii::app()->createUrl("admin/companies/update?id=".$model->id); ?>" class="mb-sm mb-lm btn btn-warning pull-right">Update</a>
                        <a href="<?php echo Yii::app()->createUrl("admin/facilities/add?company=".$model->id); ?>" class="mb-sm mb-lm btn btn-warning pull-right">Add New Facility</a>
                        <a href="<?php echo Yii::app()->createUrl("admin/cFacilities/add?company=".$model->id); ?>" class="mb-sm mb-lm btn btn-warning pull-right">Add Existing Facility</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <?php $this->widget('zii.widgets.CDetailView', array(
                                'data'=>$model,
                                'htmlOptions' => array('class' => 'table table-striped table-bordered table-hover'),
                                'attributes'=>array(
                                        'name',
                                        'profile_pic',
                                        'jewish',
                                        'url',
                                        'address',
                                        'address2',
                                        'city',
                                        'state',
                                        'zip',
                                        'country',
                                        'lat',
                                        'lng',
                                        'kc_address',
                                        'kc_address2',
                                        'kc_city',
                                        'kc_state',
                                        'kc_zip',
                                        'kc_country',
                                        'kc_lat',
                                        'kc_lng',
                                        'kc_comp_notes',
                                        'overview',
                                        'ar',
                                        'rc',
                                        'admin',
                                        'email',
                                        'email2',
                                        'phone',
                                        'phone2',
                                        'phone3',
                                        'contract_type',
                                        'active',
                                        'contract_start',
                                        'contract_exp',
                                ),
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Facilities
                    <div class="col-lg-6 pull-right">
                        <a href="<?php echo Yii::app()->createUrl("admin/facilities/add?company=".$model->id); ?>" class="mb-sm mb-lm btn btn-warning pull-right">Add New Facility</a>
                        <a href="<?php echo Yii::app()->createUrl("admin/cFacilities/add?company=".$model->id); ?>" class="mb-sm mb-lm btn btn-warning pull-right">Add Existing Facility</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        
                        <?php
//                        var_dump ($facilities->getData());
//                        die;
                        $this->widget('zii.widgets.grid.CGridView', array(
//                            'id' => 'facilities-grid',
                            'itemsCssClass' => 'table table-bordered table-hover dataTable',
                            'dataProvider' => $facilities,
                            'ajaxUpdate' => true,
//                            'filter' => $model,
                            'columns' => array(
                                'name',
                                'type',
                                'address',
                                'city',
                                'state',
                                'zip',
                                'country',
                                array(
                                    'class' => 'CButtonColumn',
                                    'template' => '{v} {u} {d}', // <-- TEMPLATE WITH THE TWO STATES
                                    'htmlOptions' => array(
                                        'width' => 120,
                                    ),
                                    'buttons' => array(
                                        'v' => array(
                                            'label' => '<i class="fa fa-search"></i>',
                                            'url' => 'Yii::app()->createUrl("admin/facilities/view", array("id"=>$data["id"]))',
                                            'options' => array('class' => 'view', 'title' => 'View'),
                                        ),
                                        'u' => array(
                                            'label' => '<i class="fa fa-edit"></i>',
                                            'url' => 'Yii::app()->createUrl("admin/facilities/update", array("id"=>$data["id"]))',
                                            'options' => array('class' => 'edit', 'title' => 'Update'),
                                        ),
                                        'd' => array(
                                            'label' => '<i class="fa fa-trash"></i>',
                                            'url' => 'Yii::app()->createUrl("admin/companies/removeFacility", array("id"=>$data["id"],"company"=>$_GET["id"]))',
                                            'options' => array('class' => 'delete', 'title' => 'Delete'),
                                            'click' => 'function(){return confirm("are you sure ?");}'
                                        ),
                                    ),
                                )
                            ),
                        ));
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
