<?php
/* @var $this AsetBarangController */
/* @var $model AsetBarang */

$this->breadcrumbs=array(
	'Aset Barangs'=>array('index'),
	$model->kodeBarang=>array('view','id'=>$model->kodeBarang),
	'Update',
);

$this->menu=array(
	array('label'=>'List AsetBarang', 'url'=>array('index')),
	array('label'=>'Create AsetBarang', 'url'=>array('create')),
	array('label'=>'View AsetBarang', 'url'=>array('view', 'id'=>$model->kodeBarang)),
	array('label'=>'Manage AsetBarang', 'url'=>array('admin')),
);
?>

<h1>Update AsetBarang <?php echo $model->kodeBarang; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>