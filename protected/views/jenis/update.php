<?php
/* @var $this JenisController */
/* @var $model Jenis */

$this->breadcrumbs=array(
	'Jenises'=>array('index'),
	$model->idJenis=>array('view','id'=>$model->idJenis),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jenis', 'url'=>array('index')),
	array('label'=>'Create Jenis', 'url'=>array('create')),
	array('label'=>'View Jenis', 'url'=>array('view', 'id'=>$model->idJenis)),
	array('label'=>'Manage Jenis', 'url'=>array('admin')),
);
?>

<h1>Update Jenis <?php echo $model->idJenis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>