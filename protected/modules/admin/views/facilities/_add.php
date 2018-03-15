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
            'id'=>'facilities-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>true,
			)); ?>
			<div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'name'); ?>
                                    <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'name'); ?>
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
                        <div class="col-lg-12">
                            <h3>Search & Place Your Marker in map for exact address location of your facility</h3>
                            <input id="pac-input" class="form-control" type="text" placeholder="Search Box">
                            <div class="row" id="map">
                                <div id="mapCanvas"></div>
                                <div id="infoPanel">
                                      <b>Closest matching address:</b>
                                      <div id="address"></div>
                                </div>
                            </div>
                        </div>
			<div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'address'); ?>
                                    <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'address'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'address2'); ?>
                                    <?php echo $form->textField($model,'address2',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'address2'); ?>
                                </div>
                            </div>
			</div>
			<div class="col-lg-12">
			    <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'city'); ?>
                                    <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'city'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'state'); ?>
                                    <?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'state'); ?>
                                </div>
                            </div>
			</div>
			<div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'zip'); ?>
                                    <?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'zip'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'country'); ?>
                                    <?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'country'); ?>
                                </div>
                            </div>
			</div>
			<div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'lat'); ?>
                                    <?php echo $form->textField($model,'lat',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'lat'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'lng'); ?>
                                    <?php echo $form->textField($model,'lng',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'lng'); ?>
                                </div>
                            </div>
			</div>
			<div class="col-lg-12">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'region'); ?>
                                    <?php echo $form->textField($model,'region',array('size'=>60,'maxlength'=>512,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'region'); ?>
                                </div>
                            </div>
                        </div>
			<div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'insp_occur'); ?>
                                    <?php echo $form->dropDownList($model,'insp_occur', getParam('inspection_freq'),array('empty' => 'Select','class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'insp_occur'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'insp_cost'); ?>
                                    <?php echo $form->textField($model,'insp_cost',array('size'=>60,'maxlength'=>16,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'insp_cost'); ?>
                                </div>
                            </div>
			</div>
			<div class="col-lg-12">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'overview'); ?>
                                    <?php echo $form->textArea($model,'overview',array('class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'overview'); ?>
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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDuOw50IlupgaDKE9tvEBMgvxMed9qli4M&sensor=false&libraries=places"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
        //updateMarkerAddress(responses[0].formatted_address);
        $("#Facilities_lat").val(pos.lat());
        $("#Facilities_lng").val(pos.lng());
        $.each(responses[0].address_components, function(key,val){
            $.each(val.types, function(k,v){
                if(v == "route"){
                        $("#Facilities_address").val(val.long_name);
                } else if (v == "sublocality_level_3" && $("#Facilities_address").val() == "") {
                        $("#Facilities_address").val(val.long_name);
                } else if(v == "sublocality_level_3" && $("#Facilities_address").val() != "") {
                        $("#Facilities_address2").val(val.long_name);
                } else if (v == "sublocality_level_2" && $("#Facilities_address").val() == "") {
                        $("#Facilities_address").val(val.long_name);
                } else if (v == "sublocality_level_2" && $("#Facilities_address").val() != "") {
                        $("#Facilities_address2").val(val.long_name);
                } else if (v == "sublocality_level_1" && $("#Facilities_address").val() == "") {
                        $("#Facilities_address").val(val.long_name);
                } else if (v == "sublocality_level_1" && $("#Facilities_address").val() != "") {
                        $("#Facilities_address2").val(val.long_name);
                } else if(v === "administrative_area_level_2"){
                        $("#Facilities_city").val(val.long_name);
                } else if(v === "administrative_area_level_1"){
                        $("#Facilities_state").val(val.long_name);
                } else if(v === "country"){
                        $("#Facilities_country").val(val.long_name);
                } else if(v === "postal_code"){
                        $("#Facilities_zip").val(val.long_name);
                }
            });
        });
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}

function initialize() {
  <?php if($model->lat != "" && $model->lng != ""): ?>
  var latLng = new google.maps.LatLng(<?php echo $model->lat; ?>, <?php echo $model->lng; ?>);
  <?php else : ?>
  var latLng = new google.maps.LatLng(42.86878055608344, -76.10512355781253);    
  <?php endif; ?>
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 7,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  //var marker = '';
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });

  // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
		google.maps.event.addListener(map, 'click', function(event) {
			if (marker && marker.setMap) {
				marker.setMap(null);
			}
			marker = new google.maps.Marker({position: event.latLng, map: map, draggable: true});
			//updateMarkerPosition(event.latLng);
			geocodePosition(event.latLng);
		});
		google.maps.event.addListener(marker, 'dragend', function() {
			geocodePosition(marker.getPosition());
		});
		var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          marker.setMap(null);
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
		});
 }

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>