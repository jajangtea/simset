<?php
/* @var $this AsetGedungController */
/* @var $model AsetGedung */

$this->breadcrumbs=array(
	'Aset Gedungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AsetGedung', 'url'=>array('index')),
	array('label'=>'Manage AsetGedung', 'url'=>array('admin')),
);
?>

<h1>Create AsetGedung</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>