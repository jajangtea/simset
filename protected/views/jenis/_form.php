<?php
/* @var $this JenisController */
/* @var $model Jenis */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenis-form',
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
		<?php echo $form->labelEx($model,'namaJenis'); ?>
		<?php echo $form->textField($model,'namaJenis',array('size'=>30,'maxlength'=>30, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'namaJenis',array('class'=>'text-danger')); ?>
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
