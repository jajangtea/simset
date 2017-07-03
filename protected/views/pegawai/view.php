<?php
/* @var $this PegawaiController */
/* @var $model UserPegawai */

$this->breadcrumbs=array(
	'User Pegawais'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserPegawai', 'url'=>array('index')),
	array('label'=>'Create UserPegawai', 'url'=>array('create')),
	array('label'=>'Update UserPegawai', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserPegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserPegawai', 'url'=>array('admin')),
);
?>

<h1>View UserPegawai #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                'realname',
		'email',
		'tlp',
		
	),
)); ?>
