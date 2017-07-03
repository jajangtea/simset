<?php
/* @var $this AsetController */
/* @var $model Aset */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_aset'); ?>
		<?php echo $form->textField($model,'id_aset',array('size'=>10,'maxlength'=>10, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg'); ?>
		<?php echo $form->textField($model,'reg',array('size'=>7,'maxlength'=>7, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ruangan'); ?>
		<?php echo $form->textField($model,'id_ruangan',array('size'=>4,'maxlength'=>4, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_jenis'); ?>
		<?php echo $form->textField($model,'id_jenis',array('size'=>2,'maxlength'=>2, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_barang'); ?>
		<?php echo $form->textField($model,'nama_barang',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'merk'); ?>
		<?php echo $form->textField($model,'merk',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_sertifikat'); ?>
		<?php echo $form->textField($model,'no_sertifikat',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bahan'); ?>
		<?php echo $form->textField($model,'bahan',array('size'=>30,'maxlength'=>30, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asal'); ?>
		<?php echo $form->textField($model,'asal',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun',array('size'=>4,'maxlength'=>4, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ukuran'); ?>
		<?php echo $form->textField($model,'ukuran',array('size'=>15,'maxlength'=>15, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'satuan'); ?>
		<?php echo $form->textField($model,'satuan',array('size'=>10,'maxlength'=>10, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kondisi'); ?>
		<?php echo $form->textField($model,'kondisi',array('size'=>10,'maxlength'=>10, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml'); ?>
		<?php echo $form->textField($model,'jml', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga'); ?>
		<?php echo $form->textField($model,'harga', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->