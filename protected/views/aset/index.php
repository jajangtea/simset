<?php
/* @var $this AsetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asets',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Aset', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Aset', 'url'=>array('admin')),
);
?>

<h1>Asets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
