<?php
/* @var $this UserPegawaiController */
/* @var $model UserPegawai */

$this->breadcrumbs=array(
	'User Pegawais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserPegawai', 'url'=>array('index')),
	array('label'=>'Manage UserPegawai', 'url'=>array('admin')),
);
?>

<h1>Create UserPegawai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>