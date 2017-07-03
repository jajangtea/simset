<?php
/* @var $this RuanganController */
/* @var $model Ruangan */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'noRuangan'); ?>
		<?php echo $form->textField($model,'noRuangan',array('size'=>10,'maxlength'=>10, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	

	<div class="form-group">
		<?php echo $form->label($model,'Penanggung Jawab'); ?>
		<?php echo CHtml::activeDropDownList($model, 'idPenanggungJawab', $model->getPenanggungJawab(), array('prompt' => 'Pilih', 'class' => 'form-control'))?>
	</div>

	<div class="form-group">
		<?php echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="fa fa-search"></i> Save');?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->