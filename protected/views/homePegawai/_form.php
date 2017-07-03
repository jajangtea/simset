<?php
/* @var $this HomePegawaiController */
/* @var $model Inventarisasi */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventarisasi-form',
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
		<?php echo $form->labelEx($model,'noInventaris'); ?>
		<?php echo $form->textField($model,'noInventaris',array('size'=>20,'maxlength'=>20, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'noInventaris',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'noRuangan'); ?>
		<?php echo $form->textField($model,'noRuangan',array('size'=>10,'maxlength'=>10, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'noRuangan',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'kodeBarang'); ?>
		<?php echo $form->textField($model,'kodeBarang',array('size'=>15,'maxlength'=>15, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'kodeBarang',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'jumlah',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'tanggal',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'kondisi'); ?>
		<?php echo $form->textField($model,'kondisi',array('size'=>10,'maxlength'=>10, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'kondisi',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'subNilai'); ?>
		<?php echo $form->textField($model,'subNilai', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'subNilai',array('class'=>'text-danger')); ?>
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
