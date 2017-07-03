<?php
/* @var $this HomePegawaiController */
/* @var $model Inventarisasi */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'noInventaris'); ?>
		<?php echo $form->textField($model,'noInventaris',array('size'=>20,'maxlength'=>20, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'noRuangan'); ?>
		<?php echo $form->textField($model,'noRuangan',array('size'=>10,'maxlength'=>10, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'kodeBarang'); ?>
		<?php echo $form->textField($model,'kodeBarang',array('size'=>15,'maxlength'=>15, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'kondisi'); ?>
		<?php echo $form->textField($model,'kondisi',array('size'=>10,'maxlength'=>10, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'subNilai'); ?>
		<?php echo $form->textField($model,'subNilai', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="fa fa-search"></i> Save');?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->