<?php
/* @var $this AsetGedungController */
/* @var $model AsetGedung */

$this->breadcrumbs=array(
	'Aset Gedungs'=>array('index'),
	$model->idGedung,
);

$this->menu=array(
	array('label'=>'List AsetGedung', 'url'=>array('index')),
	array('label'=>'Create AsetGedung', 'url'=>array('create')),
	array('label'=>'Update AsetGedung', 'url'=>array('update', 'id'=>$model->idGedung)),
	array('label'=>'Delete AsetGedung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idGedung),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AsetGedung', 'url'=>array('admin')),
);
?>

<h1>View AsetGedung #<?php echo $model->idGedung; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idGedung',
		'namaGedung',
		'luas',
		'lokasi',
		'tglPengadaan',
		'nilaiAset',
		'keterangan',
	),
)); ?>
