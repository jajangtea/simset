<?php
/* @var $this HomePegawaiController */
/* @var $model Inventarisasi */

$this->breadcrumbs=array(
	'Inventarisasis'=>array('index'),
	$model->noInventaris=>array('view','id'=>$model->noInventaris),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inventarisasi', 'url'=>array('index')),
	array('label'=>'Create Inventarisasi', 'url'=>array('create')),
	array('label'=>'View Inventarisasi', 'url'=>array('view', 'id'=>$model->noInventaris)),
	array('label'=>'Manage Inventarisasi', 'url'=>array('admin')),
);
?>

<h1>Update Inventarisasi <?php echo $model->noInventaris; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>