<?php
/* @var $this AsetTanahController */
/* @var $model AsetTanah */

$this->breadcrumbs=array(
	'Aset Tanahs'=>array('index'),
	$model->idTanah=>array('view','id'=>$model->idTanah),
	'Update',
);

$this->menu=array(
	array('label'=>'List AsetTanah', 'url'=>array('index')),
	array('label'=>'Create AsetTanah', 'url'=>array('create')),
	array('label'=>'View AsetTanah', 'url'=>array('view', 'id'=>$model->idTanah)),
	array('label'=>'Manage AsetTanah', 'url'=>array('admin')),
);
?>

<h1>Update AsetTanah <?php echo $model->idTanah; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>