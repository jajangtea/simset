<?php
/* @var $this PegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Pegawai',
);

$this->menu=array(
	array('label'=>'Create UserPegawai', 'url'=>array('create')),
	array('label'=>'Manage UserPegawai', 'url'=>array('admin')),
);
?>

<h1>Daftar Pegawai</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
