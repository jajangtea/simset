<?php
/* @var $this AsetTanahController */
/* @var $model AsetTanah */

$this->breadcrumbs=array(
	'Aset Tanahs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AsetTanah', 'url'=>array('index')),
	array('label'=>'Manage AsetTanah', 'url'=>array('admin')),
);
?>

<h1>Create AsetTanah</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>