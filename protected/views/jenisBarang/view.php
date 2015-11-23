<?php
/* @var $this JenisBarangController */
/* @var $model JenisBarang */

$this->breadcrumbs=array(
	'Jenis Barangs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JenisBarang', 'url'=>array('index')),
	array('label'=>'Create JenisBarang', 'url'=>array('create')),
	array('label'=>'Update JenisBarang', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JenisBarang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisBarang', 'url'=>array('admin')),
);
?>

<h1>View JenisBarang #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'jenis_barang',
	),
)); ?>
