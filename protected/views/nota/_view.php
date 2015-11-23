<?php
/* @var $this NotaController */
/* @var $data Nota */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_nota')); ?>:</b>
	<?php echo CHtml::encode($data->no_nota); ?>
	<br />


</div>