<?php
/* @var $this AsetBarangController */
/* @var $model AsetBarang */

$this->breadcrumbs=array(
	'Aset Barang'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AsetBarang', 'url'=>array('index')),
	array('label'=>'Create AsetBarang', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#aset-barang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Aset Barang</h1>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aset-barang-grid',
        'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
        //'rowCssClassExpression'=>'($data->warna==0)?even:odd',
	'filter'=>$model,
	'columns'=>array(
                array(
                    'header' => "No",
                    'value' => '($this->grid->dataProvider->pagination->currentPage*
                                               $this->grid->dataProvider->pagination->pageSize
                                              )+
                                              array_search($data,$this->grid->dataProvider->getData())+1',
                    'htmlOptions' => array(
                        'style' => 'width: 2%; text-align: center;',
                    ),
                ),
		'kodeBarang',
		'namaBarang',
		'idJenis0.namaJenis',
		//'manufaktur',
		'merk',
		//'model',
		
		'tahun',
		'jumlah',
                array(
                    'header' => "Jml",
                    'name'=>'jumlah',
                    'value' =>'$data->jumlah',
                    'htmlOptions' => array(
                        'style' => 'width: 2%; text-align: center;',
                    ),
                ),
                'warna',
		'tglPengadaan',
		'nilaiAset',
		//'keterangan',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
