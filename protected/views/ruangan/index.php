<?php
/* @var $this RuanganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ruangans',
);

$this->menu=array(
	array('label'=>'Create Ruangan', 'url'=>array('create')),
	array('label'=>'Manage Ruangan', 'url'=>array('admin')),
);
?>

<h3>Daftar Ruangan</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
