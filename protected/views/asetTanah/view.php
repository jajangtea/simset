<?php
/* @var $this AsetTanahController */
/* @var $model AsetTanah */

$this->breadcrumbs=array(
	'Aset Tanahs'=>array('index'),
	$model->idTanah,
);

$this->menu=array(
	array('label'=>'List AsetTanah', 'url'=>array('index')),
	array('label'=>'Create AsetTanah', 'url'=>array('create')),
	array('label'=>'Update AsetTanah', 'url'=>array('update', 'id'=>$model->idTanah)),
	array('label'=>'Delete AsetTanah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTanah),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AsetTanah', 'url'=>array('admin')),
);
?>

<h1>View AsetTanah #<?php echo $model->idTanah; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTanah',
		'lokasi',
		'suratTanah',
		'tglPengadaan',
		'nilaiAset',
		'katerangan',
	),
)); ?>
