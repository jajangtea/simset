<?php
/* @var $this AsetController */
/* @var $model Aset */

$this->breadcrumbs=array(
	'Asets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Aset', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Aset', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Aset', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Aset', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Aset', 'url'=>array('admin')),
);
?>

<h3>Detil Aset #<?php echo $model->id; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_aset',
		'reg',
		'id_ruangan',
		'id_jenis',
		'nama_barang',
		'merk',
		'no_sertifikat',
		'bahan',
		'asal',
		'tahun',
		'ukuran',
		'satuan',
		'kondisi',
		'jml',
		'harga',
		'keterangan',
		'id',
	),
)); ?>

</div>
</div>
