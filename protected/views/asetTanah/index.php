<?php
/* @var $this AsetTanahController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aset Tanahs',
);

$this->menu=array(
	array('label'=>'Create AsetTanah', 'url'=>array('create')),
	array('label'=>'Manage AsetTanah', 'url'=>array('admin')),
);
?>

<h1>Aset Tanahs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
