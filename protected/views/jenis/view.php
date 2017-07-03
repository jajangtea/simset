<?php
/* @var $this JenisController */
/* @var $model Jenis */

$this->breadcrumbs=array(
	'Jenises'=>array('index'),
	$model->idJenis,
);

$this->menu=array(
	array('label'=>'List Jenis', 'url'=>array('index')),
	array('label'=>'Create Jenis', 'url'=>array('create')),
	array('label'=>'Update Jenis', 'url'=>array('update', 'id'=>$model->idJenis)),
	array('label'=>'Delete Jenis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idJenis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jenis', 'url'=>array('admin')),
);
?>

<h1>View Jenis #<?php echo $model->idJenis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'namaJenis',
	),
)); ?>
