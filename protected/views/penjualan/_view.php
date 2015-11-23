<?php
/* @var $this PenjualanController */
/* @var $data Penjualan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_nota')); ?>:</b>
	<?php echo CHtml::encode($data->no_nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_id')); ?>:</b>
	<?php echo CHtml::encode($data->barang_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_saat_ini')); ?>:</b>
	<?php echo CHtml::encode($data->harga_saat_ini); ?>
	<br />


</div>