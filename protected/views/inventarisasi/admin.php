<?php
/* @var $this InventarisasiController */
/* @var $model Inventarisasi */

$this->breadcrumbs=array(
	'Inventarisasis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Inventaris', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Inventaris', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inventarisasi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Data Inventarisasi</h1>

<p class="label label-warning">
Berikut ini adalah data inventarisasi.
</p>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'inventarisasi-grid',
    'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'header' => "No",
            'value' => '($this->grid->dataProvider->pagination->currentPage*
                                       $this->grid->dataProvider->pagination->pageSize
                                      )+
                                      array_search($data,$this->grid->dataProvider->getData())+1',
            'htmlOptions' => array('style' => 'width: 3%; text-align: center;',
            ),
        ),
        array
            (
            'name' => 'noInventaris',
            'value' => '$data->noInventaris',
            'htmlOptions' => array(
                'style' => 'width: 10%; text-align: center;',
            ),
        ),
        array
            (
            'name' => 'noRuangan',
            'filter' => CHtml::activeDropDownList($model, 'noRuangan', $model->getRuangan(), array('prompt' => 'Pilih', 'class' => 'form-control')),
            'value' => '$data->noRuangan',
            'htmlOptions' => array(
                'style' => 'width: 7%; text-align: center;',
            ),
        ),
        array
            (
            'name' => 'kodeBarang',
            'value' => '$data->kodeBarang',
            'htmlOptions' => array(
                'style' => 'width: 7%; text-align: center;',
            ),
        ),
        'kodeBarang0.namaBarang',
        
        array(
            'name' => 'tanggal',
            'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'tanggal',
                'language' => 'id',
                'i18nScriptFile' => 'jquery.ui.datepicker-ja.js',
                'htmlOptions' => array(
                    'id' => 'tanggal',
                    'dateFormat' => 'yy-mm-dd',
                ),
                'options' => array(// (#3)
                    'showOn' => 'focus',
                    'dateFormat' => 'yy-mm-dd',
                    'showOtherMonths' => true,
                    'selectOtherMonths' => true,
                    'changeMonth' => true,
                    'changeYear' => true,
                    'showButtonPanel' => true,
                )
                    ), true),
            'htmlOptions' => array(
                'style' => 'width: 8%; text-align: center;',
            ),
        ),
        array(
            'name' => 'kondisi',
            'filter' => CHtml::activeDropDownList($model, 'kondisi', array('Baik' => 'Baik', 'Layak' => 'Layak', 'Rusak' => 'Rusak'), array('prompt' => 'Pilih', 'class' => 'form-control')),
            'value' => '$data->kondisi',
            'htmlOptions' => array(
                'style' => 'width: 7%; text-align: center;',
            ),
        ),
        array
            (
            'name' => 'jumlah',
            'value' => '$data->jumlah',
            'htmlOptions' => array(
                'style' => 'width: 5%; text-align: center;',
            ),
        ),
        array(
            'header' => 'Nilai',
            'value' => '$data->kodeBarang0->nilaiAset',
            'htmlOptions' => array(
                'style' => 'width: 7%; text-align: center;',
            ),
        ),
        array(
            'name' => 'subNilai',
            'type' => 'text',
            'footer' => $model->getTotals($model->search()->getKeys()),
            'htmlOptions' => array(
                'style' => 'width: 20%; text-align: left;',
            ),
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
