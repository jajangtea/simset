<?php
/* @var $this AsetGedungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aset Gedungs',
);

$this->menu=array(
	array('label'=>'Create AsetGedung', 'url'=>array('create')),
	array('label'=>'Manage AsetGedung', 'url'=>array('admin')),
);
?>

<h1>Aset Gedungs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
