<?php
/* @var $this JenisBarangController */
/* @var $data JenisBarang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_barang')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_barang); ?>
	<br />


</div>