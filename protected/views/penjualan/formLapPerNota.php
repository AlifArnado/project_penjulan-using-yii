<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
/* @var $form CActiveForm */
?>

<div class="wire form">
	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kasir-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> aer required.</p>

	<div class="row">
       <?php //echo $form->labelEx($model,'no_nota');  ?>
       <?php //echo $form->textField($model,'no_nota');  ?>
	</div>

	<div class="row">
	    <?php echo $form->labelEx($model,'dari_tanggal');  ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'datepicke',
		    // additional javascript options for the date picker plugin
		    'options'=>array(
		        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
		    ),
		));
?>
	</div>
	<div class="row">
	    <?php echo $form->labelEx($model,'sampe_tanggal');  ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'datepicker',
		    // additional javascript options for the date picker plugin
		    'options'=>array(
		        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
		    ),
		));
		?>
	</div>

	<div class="row button">
		<?php echo CHtml::submitButton('Cetak'); ?>
	</div>
	<?php $this->endWidget(); ?>
</div> <!-- form -->

