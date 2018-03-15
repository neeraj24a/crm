<div class="content-wrapper">
    <h3>Account Representative Details</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo $model->first; ?>
                    <div class="col-lg-2 pull-right">
                        <a href="<?php echo Yii::app()->createUrl("admin/aR/update?id=" . $model->id); ?>" class="mb-sm btn btn-warning">Update</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <?php
                        $this->widget('zii.widgets.CDetailView', array(
                            'data' => $model,
                            'htmlOptions' => array('class' => 'table table-striped table-bordered table-hover'),
                            'attributes' => array(
                                'first',
                                'last',
                                'email',
                                'phone',
                                'phone2',
                                'address',
                                'city',
                                'state',
                                'zip',
                                'country',
                                'assignments',
                                'notes',
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Company List
                    <div class="col-lg-2 pull-right">
                        <a href="<?php echo Yii::app()->createUrl("admin/companies/create?ar=".$model->id); ?>" class="mb-sm btn btn-warning">Add Company</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id'=>'companies-grid',
                            'itemsCssClass' => 'table table-bordered table-hover dataTable',
                            'dataProvider' => $company->arRcSearch($model->id, 'ar'),
//                            'filter' => $model,
                            'columns' => array(
                                'name',
								'jewish',
								'url',
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
                                            'url' => 'Yii::app()->createUrl("admin/companies/view", array("id"=>$data->id))',
                                            'options' => array('class' => 'view', 'title' => 'View'),
                                        ),
                                        'u' => array(
                                            'label' => '<i class="fa fa-edit"></i>',
                                            'url' => 'Yii::app()->createUrl("admin/companies/update", array("id"=>$data->id))',
                                            'options' => array('class' => 'edit', 'title' => 'Update'),
                                        ),
                                        'd' => array(
                                            'label' => '<i class="fa fa-trash"></i>',
                                            'url' => 'Yii::app()->createUrl("admin/companies/delete", array("id"=>$data->id))',
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
