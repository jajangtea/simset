<?php
/* @var $this InventarisasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventarisasis',
);

$this->menu=array(
	array('label'=>'Create Inventarisasi', 'url'=>array('create')),
	array('label'=>'Manage Inventarisasi', 'url'=>array('admin')),
);
?>

<h1>Inventarisasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
