<?php
/* @var $this HomeAdminController */
/* @var $model Inventarisasi */

$this->breadcrumbs=array(
	'Inventarisasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inventarisasi', 'url'=>array('index')),
	array('label'=>'Manage Inventarisasi', 'url'=>array('admin')),
);
?>

<h1>Create Inventarisasi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>