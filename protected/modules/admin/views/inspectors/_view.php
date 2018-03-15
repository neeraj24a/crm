<?php
/* @var $this InspectorsController */
/* @var $data Inspectors */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('web_enabled')); ?>:</b>
	<?php echo CHtml::encode($data->web_enabled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone2')); ?>:</b>
	<?php echo CHtml::encode($data->phone2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('org')); ?>:</b>
	<?php echo CHtml::encode($data->org); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semi')); ?>:</b>
	<?php echo CHtml::encode($data->semi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semi_from')); ?>:</b>
	<?php echo CHtml::encode($data->semi_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prev_agency')); ?>:</b>
	<?php echo CHtml::encode($data->prev_agency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prev_positions')); ?>:</b>
	<?php echo CHtml::encode($data->prev_positions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prev_years')); ?>:</b>
	<?php echo CHtml::encode($data->prev_years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curr_employed')); ?>:</b>
	<?php echo CHtml::encode($data->curr_employed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curr_employer')); ?>:</b>
	<?php echo CHtml::encode($data->curr_employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_travel_states')); ?>:</b>
	<?php echo CHtml::encode($data->reg_travel_states); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_travel_countries')); ?>:</b>
	<?php echo CHtml::encode($data->reg_travel_countries); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expertise')); ?>:</b>
	<?php echo CHtml::encode($data->expertise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acct_name')); ?>:</b>
	<?php echo CHtml::encode($data->acct_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acct_num')); ?>:</b>
	<?php echo CHtml::encode($data->acct_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_name')); ?>:</b>
	<?php echo CHtml::encode($data->bank_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_address')); ?>:</b>
	<?php echo CHtml::encode($data->bank_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('swift')); ?>:</b>
	<?php echo CHtml::encode($data->swift); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bic')); ?>:</b>
	<?php echo CHtml::encode($data->bic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('routing')); ?>:</b>
	<?php echo CHtml::encode($data->routing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_inst')); ?>:</b>
	<?php echo CHtml::encode($data->special_inst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route')); ?>:</b>
	<?php echo CHtml::encode($data->route); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assignments')); ?>:</b>
	<?php echo CHtml::encode($data->assignments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted')); ?>:</b>
	<?php echo CHtml::encode($data->deleted); ?>
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

	*/ ?>

</div>