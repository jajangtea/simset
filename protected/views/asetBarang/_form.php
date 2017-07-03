<?php
/* @var $this AsetBarangController */
/* @var $model AsetBarang */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aset-barang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="text-info">Kolom dengan tanda <span class="required">*</span> tidak boleh kosong.</p>
	
        <div class="form-group">
            <?php echo $form->labelEx($model, 'kodeBarang'); ?>
            <?php echo $form->textField($model, 'kodeBarang', array('size' => 60, 'maxlength' => 255, 'value' => (($model->isNewRecord) ? $model->generateKode() : $model->kodeBarang), 'readonly' => true)); ?>
            <?php echo $form->error($model, 'kodeBarang'); ?>
        </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'namaBarang'); ?>
		<?php echo $form->textField($model,'namaBarang',array('size'=>60,'maxlength'=>200, 'class'=>'span6')); ?>
		<?php echo $form->error($model,'namaBarang',array('class'=>'label label-important','style'=>'width:40%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Jenis'); ?>
		 <?php echo CHtml::activeDropDownList($model, 'idJenis', $model->getJenis(), array('prompt' => 'Pilih Jenis', 'class' => 'span4')); ?>
		<?php echo $form->error($model,'idJenis',array('class'=>'label label-important','style'=>'width:40%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'manufaktur'); ?>
		<?php echo $form->textField($model,'manufaktur',array('size'=>60,'maxlength'=>100, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'manufaktur',array('class'=>'label label-important')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'merk'); ?>
		<?php echo $form->textField($model,'merk',array('size'=>60,'maxlength'=>100, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'merk',array('class'=>'label label-important')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>100, 'class'=>'form-control','style'=>'width:30%')); ?>
		<?php echo $form->error($model,'model',array('class'=>'label label-important')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tahun'); ?>
                <?php
                    $range = range($model::MIN_RANGE, date('Y'));
                    echo $form->dropDownList($model, 'tahun', array_combine($range, $range));
                ?>
		<?php echo $form->error($model,'tahun',array('class'=>'label label-important')); ?>
	</div>
        
	<div class="form-group">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah', array('class'=>'span2')); ?>
		<?php echo $form->error($model,'jumlah',array('class'=>'label label-important')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'warna'); ?>
                <?php
                $this->widget('ext.SMiniColors.SActiveColorPicker', array(
                    'model' => $model,
                    'attribute' => 'warna',
                    'hidden' => false, // defaults to false - can be set to hide the textarea with the hex
                    'options' => array(), // jQuery plugin options
                    'htmlOptions' => array(), // html attributes
                ));
                ?>
		<?php echo $form->error($model,'warna',array('class'=>'label label-important')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tglPengadaan'); ?>
		<?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'attribute' => 'tglPengadaan',
                    'name' => 'tglPengadaan',
                    'options' => array(
                        'showAnim' => 'fold',
                        'altFormat' => 'yy-mm-dd',
                        'dateFormat' => 'yy-mm-dd',
                        'appendText' => 'yyyy-mm-dd',
                        'changeMonth' => true,
                        'changeYear' => true,
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:20px;',
                        'value' => date('Y-m-d'),
                    ),
                ));
                ?>
		<?php echo $form->error($model,'tglPengadaan',array('class'=>'label label-important')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nilaiAset'); ?>
		<?php 
                    echo '<div class="input-prepend">';
                    echo '<span class="add-on">Rp.</span>';
                    echo $form->textField($model,'nilaiAset', array('class'=>'span3')); 
                    echo '</div>';
                ?>
		<?php echo $form->error($model,'nilaiAset',array('class'=>'label label-important')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6,'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keterangan',array('class'=>'label label-important')); ?>
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
