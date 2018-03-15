<?php
/* @var $this CompaniesController */
/* @var $data Companies */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile_pic')); ?>:</b>
	<?php echo CHtml::encode($data->profile_pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jewish')); ?>:</b>
	<?php echo CHtml::encode($data->jewish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('address2')); ?>:</b>
	<?php echo CHtml::encode($data->address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lng')); ?>:</b>
	<?php echo CHtml::encode($data->lng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kc_address')); ?>:</b>
	<?php echo CHtml::encode($data->kc_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kc_address2')); ?>:</b>
	<?php echo CHtml::encode($data->kc_address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kc_city')); ?>:</b>
	<?php echo CHtml::encode($data->kc_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kc_state')); ?>:</b>
	<?php echo CHtml::encode($data->kc_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kc_zip')); ?>:</b>
	<?php echo CHtml::encode($data->kc_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kc_country')); ?>:</b>
	<?php echo CHtml::encode($data->kc_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kc_lat')); ?>:</b>
	<?php echo CHtml::encode($data->kc_lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kc_lng')); ?>:</b>
	<?php echo CHtml::encode($data->kc_lng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kc_comp_notes')); ?>:</b>
	<?php echo CHtml::encode($data->kc_comp_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overview')); ?>:</b>
	<?php echo CHtml::encode($data->overview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ar')); ?>:</b>
	<?php echo CHtml::encode($data->ar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rc')); ?>:</b>
	<?php echo CHtml::encode($data->rc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin')); ?>:</b>
	<?php echo CHtml::encode($data->admin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email2')); ?>:</b>
	<?php echo CHtml::encode($data->email2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone2')); ?>:</b>
	<?php echo CHtml::encode($data->phone2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone3')); ?>:</b>
	<?php echo CHtml::encode($data->phone3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contract_type')); ?>:</b>
	<?php echo CHtml::encode($data->contract_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contract_start')); ?>:</b>
	<?php echo CHtml::encode($data->contract_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contract_exp')); ?>:</b>
	<?php echo CHtml::encode($data->contract_exp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_entered')); ?>:</b>
	<?php echo CHtml::encode($data->date_entered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo CHtml::encode($data->date_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted')); ?>:</b>
	<?php echo CHtml::encode($data->deleted); ?>
	<br />

	*/ ?>

</div>