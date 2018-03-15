<?php
/* @var $this CompaniesController */
/* @var $model Companies */
/* @var $form CActiveForm */
?>
<style>
/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      .map {
        height: 400px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      .map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input, #kc-pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
		margin-top: 10px;
      }

      #pac-input:focus, #kc-pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
	  #mapCanvas, #kcMapCanvas {
		height: 400px;
		float: left;
		width: 100%;
	  }
      #infoPanel, #kcPanel {
		float: left;
		margin-left: 10px;
      }
	  #infoPanel div, #kcPanel div {
		margin-bottom: 5px;
	  }
</style>
<div class="panel panel-default">
    <div class="panel-heading">Facility Addition Form</div>
    <div class="panel-body">
        <div class="row">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'cFacilities-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>true,
			)); ?>
			<div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'facility'); ?>
                                    <?php
                                        $facilities = Facilities::model()->findAll();
                                        $list = CHtml::listData($facilities, 'id', 'name');
                                    ?>
                                    <?php echo $form->dropDownList($model,'facility',$list,array('empty'=>'Select Facility','class'=>'form-control')); ?>
                                    <?php echo $form->hiddenField($model,'company',array('value'=>$_GET['company'],'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'facility'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'type'); ?>
                                    <?php echo $form->dropDownList($model,'type',array("OWN" => "Owned","MFG" => "Manufacturing"),array('empty' => 'Select Type','class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'type'); ?>
                                </div>
                            </div>
			</div>
                        <div class="col-lg-12 m-t-20">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'mb-sm btn btn-info')); ?>
                            <a href="<?php echo Yii::app()->createUrl("admin/facilities"); ?>" class="mb-sm btn btn-warning pull-right">Back</a>
                        </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>