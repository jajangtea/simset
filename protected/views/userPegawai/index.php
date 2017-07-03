<?php
/* @var $this UserPegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Pegawais',
);

$this->menu=array(
	array('label'=>'Create UserPegawai', 'url'=>array('create')),
	array('label'=>'Manage UserPegawai', 'url'=>array('admin')),
);
?>

<h1>User Pegawais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
