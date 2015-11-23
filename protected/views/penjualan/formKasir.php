<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kasir-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php $modelKasir->tanggal=date('Y-m-d'); ?>

	<div class="row">
		<?php echo $form->labelEx($modelKasir,'username'); ?>
		<?php echo $form->textField($modelKasir,'username', array('value'=>Yii::app()->user->name)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelKasir,'tanggal'); ?>
		<?php echo $form->textField($modelKasir,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelKasir,'no_nota'); ?>
		<?php echo $form->textField($modelKasir,'no_nota', array('value'=>$this->nota)); ?>
	</div>

	<div class="row">
		<?php echo CHtml::button('Lanjutkan>>', array('submit'=>array('penjualan/create', 'nota'=>$this->nota))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->