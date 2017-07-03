<?php
/* @var $this JenisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenise Aset',
);

$this->menu=array(
	array('label'=>'Create Jenis', 'url'=>array('create')),
	array('label'=>'Manage Jenis', 'url'=>array('admin')),
);
?>

<h1>Jenis Aset</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
