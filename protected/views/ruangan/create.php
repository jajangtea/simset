<?php
/* @var $this RuanganController */
/* @var $model Ruangan */

$this->breadcrumbs=array(
	'Ruangans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ruangan', 'url'=>array('index')),
	array('label'=>'Manage Ruangan', 'url'=>array('admin')),
);
?>

<h1>Create Ruangan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>