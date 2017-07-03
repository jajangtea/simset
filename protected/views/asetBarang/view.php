<?php
/* @var $this AsetBarangController */
/* @var $model AsetBarang */

$this->breadcrumbs=array(
	'Aset Barangs'=>array('index'),
	$model->kodeBarang,
);

$this->menu=array(
	array('label'=>'List AsetBarang', 'url'=>array('index')),
	array('label'=>'Create AsetBarang', 'url'=>array('create')),
	array('label'=>'Update AsetBarang', 'url'=>array('update', 'id'=>$model->kodeBarang)),
	array('label'=>'Delete AsetBarang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kodeBarang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AsetBarang', 'url'=>array('admin')),
);
?>

<h1>View AsetBarang #<?php echo $model->kodeBarang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kodeBarang',
		'namaBarang',
                array(
			'label'=>'Jenis',
			'type'=>'raw',
			'value'=>$model->idJenis0->namaJenis,
		),
		'manufaktur',
		'merk',
		'model',
		'tahun',
		'jumlah',
		'warna',
		'tglPengadaan',
		'nilaiAset',
                'subNilaiAset',
		'keterangan',
	),
)); ?>
