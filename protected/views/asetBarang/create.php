<?php
/* @var $this AsetBarangController */
/* @var $model AsetBarang */

$this->breadcrumbs=array(
	'Aset Barangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AsetBarang', 'url'=>array('index')),
	array('label'=>'Manage AsetBarang', 'url'=>array('admin')),
);
?>

<h1>Create AsetBarang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>