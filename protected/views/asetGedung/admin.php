<?php
/* @var $this AsetGedungController */
/* @var $model AsetGedung */

$this->breadcrumbs = array(
    'Aset Gedungs' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List AsetGedung', 'url' => array('index')),
    array('label' => 'Create AsetGedung', 'url' => array('create')),
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

<h1>Manage Aset Gedung</h1>

<?php //echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'aset-gedung-grid',
    'dataProvider' => $model->search(),
    'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
    //'filter' => $model,
    'columns' => array(
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
        'namaGedung',
        'luas',
        'lokasi',
        'tglPengadaan',
        'nilaiAset',
        /*
          'keterangan',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
