<?php
/* @var $this JenisController */
/* @var $model Jenis */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'namaJenis'); ?>
		<?php echo $form->textField($model,'namaJenis',array('size'=>30,'maxlength'=>30, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="icon-search icon-white"></i> Cari');?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->