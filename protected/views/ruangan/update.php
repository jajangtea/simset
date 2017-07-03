<?php
/* @var $this RuanganController */
/* @var $model Ruangan */

$this->breadcrumbs=array(
	'Ruangans'=>array('index'),
	$model->noRuangan=>array('view','id'=>$model->noRuangan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ruangan', 'url'=>array('index')),
	array('label'=>'Create Ruangan', 'url'=>array('create')),
	array('label'=>'View Ruangan', 'url'=>array('view', 'id'=>$model->noRuangan)),
	array('label'=>'Manage Ruangan', 'url'=>array('admin')),
);
?>

<h1>Update Ruangan <?php echo $model->noRuangan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>