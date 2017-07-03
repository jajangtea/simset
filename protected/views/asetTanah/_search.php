<?php
/* @var $this AsetTanahController */
/* @var $model AsetTanah */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idTanah'); ?>
		<?php echo $form->textField($model,'idTanah', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'lokasi'); ?>
		<?php echo $form->textArea($model,'lokasi',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'suratTanah'); ?>
		<?php echo $form->textField($model,'suratTanah',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tglPengadaan'); ?>
		<?php echo $form->textField($model,'tglPengadaan', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'nilaiAset'); ?>
		<?php echo $form->textField($model,'nilaiAset', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'katerangan'); ?>
		<?php echo $form->textArea($model,'katerangan',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="fa fa-search"></i> Save');?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->