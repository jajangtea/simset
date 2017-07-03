<?php
/* @var $this InventarisasiController */
/* @var $model Inventarisasi */

$this->breadcrumbs=array(
	'Inventarisasis'=>array('index'),
	$model->noInventaris,
);

$this->menu=array(
	array('label'=>'List Inventarisasi', 'url'=>array('index')),
	array('label'=>'Create Inventarisasi', 'url'=>array('create')),
	array('label'=>'Update Inventarisasi', 'url'=>array('update', 'id'=>$model->noInventaris)),
	array('label'=>'Delete Inventarisasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->noInventaris),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inventarisasi', 'url'=>array('admin')),
);
?>

<h1>View Inventarisasi #<?php echo $model->noInventaris; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'noInventaris',
		'noRuangan',
		'kodeBarang',
		'jumlah',
		'tanggal',
		'kondisi',
	),
)); ?>
