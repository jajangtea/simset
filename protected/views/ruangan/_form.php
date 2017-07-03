<?php
/* @var $this RuanganController */
/* @var $model Ruangan */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'ruangan-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="text-info">Kolom dengan tanda <span class="required">*</span> tidak boleh kosong.</p>
<div class="text-danger">
    <?php echo $form->errorSummary($model); ?>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'noRuangan'); ?>
    <?php echo $form->textField($model, 'noRuangan', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control', 'style' => 'width:30%')); ?>
    <?php echo $form->error($model, 'noRuangan', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'namaRuangan'); ?>
    <?php echo $form->textField($model, 'namaRuangan', array('size' => 30, 'maxlength' => 30, 'class' => 'form-control', 'style' => 'width:30%')); ?>
    <?php echo $form->error($model, 'namaRuangan', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php echo(CHtml::label('Penanggung Jawab', 'idPenanggungJawab')); ?>
    <?php echo CHtml::activeDropDownList($model, 'idPenanggungJawab', $model->getPenanggungJawab(), array('prompt' => 'Pilih Pegawai', 'class' => 'form-control')); ?>
    <?php echo $form->error($model, 'idPenanggungJawab', array('class' => 'text-danger')); ?>
</div>

<div class="form-group">
    <?php
    if ($model->isNewRecord) {
        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-success'), '<i class="fa fa-save"></i> Create');
    } else {
        echo CHtml::tag('button', array('name' => 'btnSubmit', 'type' => 'submit', 'class' => 'btn btn-info'), '<i class="fa fa-save"></i> Save');
    }
    ?>
</div>

<?php $this->endWidget(); ?>
