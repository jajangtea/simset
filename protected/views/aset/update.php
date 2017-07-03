<?php
/* @var $this AsetController */
/* @var $model Aset */

$this->breadcrumbs=array(
	'Asets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Aset', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Tambah Aset', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> Detil Aset', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon icon-list-alt"></i> Admin Aset', 'url'=>array('admin')),
);
?>

<h3>Ubah Aset# <?php echo $model->id; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>