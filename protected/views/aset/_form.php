<?php
/* @var $this AsetController */
/* @var $model Aset */
/* @var $form CActiveForm */
?>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aset-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_aset'); ?>
		<?php echo $form->textField($model,'id_aset',array('size'=>10,'maxlength'=>10, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'id_aset'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reg'); ?>
		<?php echo $form->textField($model,'reg',array('size'=>7,'maxlength'=>7, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ruangan'); ?>
		<?php echo $form->textField($model,'id_ruangan',array('size'=>4,'maxlength'=>4, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'id_ruangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jenis'); ?>
		<?php echo $form->textField($model,'id_jenis',array('size'=>2,'maxlength'=>2, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'id_jenis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_barang'); ?>
		<?php echo $form->textField($model,'nama_barang',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nama_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merk'); ?>
		<?php echo $form->textField($model,'merk',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'merk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_sertifikat'); ?>
		<?php echo $form->textField($model,'no_sertifikat',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'no_sertifikat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bahan'); ?>
		<?php echo $form->textField($model,'bahan',array('size'=>30,'maxlength'=>30, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asal'); ?>
		<?php echo $form->textField($model,'asal',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'asal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun',array('size'=>4,'maxlength'=>4, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ukuran'); ?>
		<?php echo $form->textField($model,'ukuran',array('size'=>15,'maxlength'=>15, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'ukuran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'satuan'); ?>
		<?php echo $form->textField($model,'satuan',array('size'=>10,'maxlength'=>10, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'satuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kondisi'); ?>
		<?php echo $form->textField($model,'kondisi',array('size'=>10,'maxlength'=>10, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kondisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml'); ?>
		<?php echo $form->textField($model,'jml', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jml'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>