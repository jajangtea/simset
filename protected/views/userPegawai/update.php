<?php
/* @var $this UserPegawaiController */
/* @var $model UserPegawai */

$this->breadcrumbs=array(
	'User Pegawais'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserPegawai', 'url'=>array('index')),
	array('label'=>'Create UserPegawai', 'url'=>array('create')),
	array('label'=>'View UserPegawai', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserPegawai', 'url'=>array('admin')),
);
?>

<h1>Update UserPegawai <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>