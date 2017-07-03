<?php
/* @var $this AsetGedungController */
/* @var $model AsetGedung */

$this->breadcrumbs=array(
	'Aset Gedungs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AsetGedung', 'url'=>array('index')),
	array('label'=>'Create AsetGedung', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#aset-gedung-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Aset Gedungs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aset-gedung-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idGedung',
		'namaGedung',
		'luas',
		'lokasi',
		'tglPengadaan',
		'nilaiAset',
		/*
		'keterangan',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
