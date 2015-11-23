<?php
/* @var $this JenisBarangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Barangs',
);

$this->menu=array(
	array('label'=>'Create JenisBarang', 'url'=>array('create')),
	array('label'=>'Manage JenisBarang', 'url'=>array('admin')),
);
?>

<h1>Jenis Barangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
