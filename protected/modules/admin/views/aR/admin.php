<div class="content-wrapper">
    <h3>Account Representative</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Search Account Representative
                </div>
                <div class="panel-body">
                    <?php
                    Yii::app()->clientScript->registerScript('search', "
							$('.search-button').click(function(){
								$('.search-form').toggle();
								return false;
							});
							$('.search-form form').submit(function(){
								$('#ar-grid').yiiGridView('update', {
									data: $(this).serialize()
								});
								return false;
							});
						");
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Rabbinical Coordinator List
                    <div class="col-lg-2 pull-right">
                        <a href="<?php echo Yii::app()->createUrl("admin/aR/create"); ?>" class="mb-sm btn btn-warning">Add Account Representatives</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id' => 'ar-grid',
                            'itemsCssClass' => 'table table-bordered table-hover dataTable',
                            'dataProvider' => $model->search(),
//                            'filter' => $model,
                            'columns' => array(
                                'first',
                                'last',
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
                                            'url' => 'Yii::app()->createUrl("admin/aR/view", array("id"=>$data->id))',
                                            'options' => array('class' => 'view', 'title' => 'View'),
                                        ),
                                        'u' => array(
                                            'label' => '<i class="fa fa-edit"></i>',
                                            'url' => 'Yii::app()->createUrl("admin/aR/update", array("id"=>$data->id))',
                                            'options' => array('class' => 'edit', 'title' => 'Update'),
                                        ),
                                        'd' => array(
                                            'label' => '<i class="fa fa-trash"></i>',
                                            'url' => 'Yii::app()->createUrl("admin/aR/delete", array("id"=>$data->id))',
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