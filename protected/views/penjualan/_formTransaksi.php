<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
/* @var $form CActiveForm */
?>

<?php
	if (isset($_GET['nota'])) {
		$this->nota = $_GET['nota'];
		$modelBaru->nota=$this->nota;
	} else {
		$this->nota = $modelBaru->nota;
	}

 ?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penjualan-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true, 'validateOnType'=>true,'validateOnChange'=>true),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($modelBaru); ?>
	<?php $modelBaru->tanggal=date('Y-m-d'); ?>

	<div class="row">
		<?php echo $form->labelEx($modelBaru,'tanggal'); ?>
		<?php echo $form->textField($modelBaru,'tanggal'); ?>
		<?php echo $form->error($modelBaru,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelBaru,'no_nota'); ?>
		<?php echo $form->textField($modelBaru,'no_nota', array('value'=>$this->nota)); ?>
	</div>

	<div class="row">
		<?php echo $form->LabelEx($modelBaru,'barang_id'); ?>
		<?php echo $form->textField($modelBaru,'barang_id', array('size'=>3, 'maxlength'=>4, 'onChange'=>"{selectBarang();}")); ?>
		<?php echo $form->error($modelBaru,'barang_id'); ?>

		<?php echo $form->textField($modelBaru,'nama_barang', array('size'=>30, 'maxlength'=>30,)); ?>
		<?php echo $form->error($modelBaru,'nama_barang'); ?>

		<?php echo $form->textField($modelBaru,'qty', array('size'=>3, 'maxlength'=>4, 'style'=>'text-align:right')); ?>
		<?php echo $form->error($modelBaru,'qty'); ?>

		<?php echo $form->textField($modelBaru,'harga_saat_ini', array('size'=>10, 'maxlength'=>10, 'style'=>'text-align:right')); ?>
		<?php echo $form->error($modelBaru,'harga_saat_ini'); ?>

		<?php echo $form->textField($modelBaru,'total', array('size'=>5, 'maxlength'=>10, 'style'=>'text-align:right')); ?>
		<?php echo $form->error($modelBaru,'total'); ?>

		<?php echo CHtml::submitButton($modelBaru->isNewRecord ? 'Simpan' : 'Ubah'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
