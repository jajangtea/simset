<?php
/* @var $this JenisController */
/* @var $model Jenis */

$this->breadcrumbs=array(
	'Jenises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jenis', 'url'=>array('index')),
	array('label'=>'Manage Jenis', 'url'=>array('admin')),
);
?>

<h1>Create Jenis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>