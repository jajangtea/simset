<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Pengguna', 'url'=>array('index')),
        array('label'=>'<i class="icon icon-adjust"></i> Tambah Pengguna', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola User</h1>



<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
        'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
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
		'username',
                'realname',
		'email',
		'joinDate',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
