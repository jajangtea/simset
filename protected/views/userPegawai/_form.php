<?php
/* @var $this UserPegawaiController */
/* @var $model UserPegawai */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-pegawai-form',
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
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'username',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'password',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'saltPassword'); ?>
		<?php echo $form->textField($model,'saltPassword',array('size'=>50,'maxlength'=>50, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'saltPassword',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'email',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'joinDate'); ?>
		<?php echo $form->textField($model,'joinDate', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'joinDate',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'level_id'); ?>
		<?php echo $form->textField($model,'level_id', array('class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'level_id',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tlp'); ?>
		<?php echo $form->textField($model,'tlp',array('size'=>30,'maxlength'=>30, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'tlp',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'realname'); ?>
		<?php echo $form->textField($model,'realname',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'realname',array('class'=>'text-danger')); ?>
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
