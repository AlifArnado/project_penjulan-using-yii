<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnType'=>true, 'validationOnChange'=>true,),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_barang'); ?>
		<?php echo $form->dropDownList($model,'jenis_barang',
					CHtml::listData(JenisBarang::model()->findAll(),'id','jenis_barang'),
		           array('prompt'=>'= Pilihan =','style'=>'width:200px;')); ?>
		<?php echo $form->error($model,'jenis_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_barang'); ?>
		<?php echo $form->textField($model,'nama_barang',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nama_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'satuan'); ?>
		<?php echo $form->textField($model,'satuan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'satuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stok'); ?>
		<?php echo $form->textField($model,'stok'); ?>
		<?php echo $form->error($model,'stok'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->