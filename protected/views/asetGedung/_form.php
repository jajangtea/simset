<?php
/* @var $this AsetGedungController */
/* @var $model AsetGedung */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aset-gedung-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="text-info">Kolom dengan tanda <span class="required">*</span> tidak boleh kosong.</p>
	<div class="text-danger">
	<?php echo $form->errorSummary($model); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'namaGedung'); ?>
		<?php echo $form->textField($model,'namaGedung',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'namaGedung',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'luas'); ?>
		<?php echo $form->textField($model,'luas',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'luas',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<?php echo $form->textArea($model,'lokasi',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'lokasi',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tglPengadaan'); ?>
		<?php echo $form->textField($model,'tglPengadaan', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'tglPengadaan',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nilaiAset'); ?>
		<?php echo $form->textField($model,'nilaiAset', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'nilaiAset',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'keterangan',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
                 <?php
if($model->isNewRecord)
{
echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-success'),'<i class="fa fa-save"></i> Create');
}
else
{
echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="fa fa-save"></i> Save');
}
?>
	</div>

<?php $this->endWidget(); ?>
