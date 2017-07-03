<?php
/* @var $this AsetBarangController */
/* @var $model AsetBarang */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'kodeBarang'); ?>
		<?php echo $form->textField($model,'kodeBarang',array('size'=>15,'maxlength'=>15, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'namaBarang'); ?>
		<?php echo $form->textField($model,'namaBarang',array('size'=>60,'maxlength'=>200, 'class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tahun'); ?>
		<?php
                    $range = range($model::MIN_RANGE, date('Y'));
                    echo $form->dropDownList($model, 'tahun', array_combine($range, $range));
                ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah', array('class'=>'form-control','style'=>'width:30%')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tglPengadaan'); ?>
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
	</div>

	<div class="form-group">
		<?php echo CHtml::tag('button',array('name'=>'btnSubmit','type'=>'submit','class'=>'btn btn-info'),'<i class="icon icon-search icon-white"></i> Cari');?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->