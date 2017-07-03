<?php
/* @var $this AsetGedungController */
/* @var $model AsetGedung */

$this->breadcrumbs=array(
	'Aset Gedungs'=>array('index'),
	$model->idGedung=>array('view','id'=>$model->idGedung),
	'Update',
);

$this->menu=array(
	array('label'=>'List AsetGedung', 'url'=>array('index')),
	array('label'=>'Create AsetGedung', 'url'=>array('create')),
	array('label'=>'View AsetGedung', 'url'=>array('view', 'id'=>$model->idGedung)),
	array('label'=>'Manage AsetGedung', 'url'=>array('admin')),
);
?>

<h1>Update AsetGedung <?php echo $model->idGedung; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>