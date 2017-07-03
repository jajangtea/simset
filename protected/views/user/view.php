<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
)); ?>

<h1>Profile #<?php echo $model->username; ?></h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'email',
		'joinDate',
		'level_id',
		
	),
)); ?>


<?php $this->endWidget(); ?>