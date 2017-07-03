<?php
/* @var $this RuanganController */
/* @var $model Ruangan */

$this->breadcrumbs=array(
	'Ruangans'=>array('index'),
	$model->noRuangan,
);

$this->menu=array(
	array('label'=>'List Ruangan', 'url'=>array('index')),
	array('label'=>'Create Ruangan', 'url'=>array('create')),
	array('label'=>'Update Ruangan', 'url'=>array('update', 'id'=>$model->noRuangan)),
	array('label'=>'Delete Ruangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->noRuangan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ruangan', 'url'=>array('admin')),
);
?>

<h1>View Ruangan #<?php echo $model->noRuangan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'noRuangan',
		'namaRuangan',
		'idPenanggungJawab0.realname',
	),
)); ?>
