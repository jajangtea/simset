<?php
/* @var $this AsetBarangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aset Barang',
);

$this->menu=array(
	array('label'=>'Create AsetBarang', 'url'=>array('create')),
	array('label'=>'Manage AsetBarang', 'url'=>array('admin')),
);
?>

<h1>Aset Barang</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
