<?php
/* @var $this AsetController */
/* @var $model Aset */

$this->breadcrumbs=array(
	'Asets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Aset', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Aset', 'url'=>array('admin')),
);
?>

<h3>Tambah Aset Baru</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>