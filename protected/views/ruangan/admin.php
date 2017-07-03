<?php
/* @var $this RuanganController */
/* @var $model Ruangan */

$this->breadcrumbs = array(
    'Ruangans' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label'=>'<i class="icon icon-list"></i> Data Ruangan', 'url'=>array('index')),
    array('label'=>'<i class="icon icon-adjust"></i> Tambah Ruangan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ruangan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Kelola Ruangan</h2>

<p>.
    berikut ini adalah daftar ruangan yang ada di gedung     STT Indonesia Tanjungpinang
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'ruangan-grid',
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
            'htmlOptions' => array(
                'style' => 'width: 2%; text-align: center;',
            ),
        ),
        array(
            'name' => 'noRuangan',
            'type' => 'raw',
            'header' => 'No.Ruang',
            'value' => '$data->noRuangan',
            'htmlOptions' => array('width' => '5%'),
        ),
        array
            (
            'name' => 'idPenanggungJawab',
            'filter' => CHtml::activeDropDownList($model, 'idPenanggungJawab', $model->getPenanggungJawab(), array('prompt' => 'Pilih', 'class' => 'form-control')),
            'value' => '$data->idPenanggungJawab0->realname',
            'htmlOptions' => array(
                'style' => 'width: 30%; text-align:left;',
            ),
        ),
        array(
            'name' => 'namaRuangan',
            'type' => 'raw',
            'header' => 'Keterangan',
            'value' => '$data->namaRuangan',
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
