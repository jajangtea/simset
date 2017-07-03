<?php
/* @var $this InventarisasiController */
/* @var $model Inventarisasi */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget(
    'CActiveForm', array(
        'id' => 'inventarisasi-form',
        'enableAjaxValidation' => true,
    )
);
?>
<p class="text-info">Kolom dengan tanda <span class="required">*</span> tidak boleh kosong.</p>
<div class="form-group">
    <?php echo $form->labelEx($model, 'noInventaris'); ?>
    <?php echo $form->textField($model, 'noInventaris', array('size' => 60, 'maxlength' => 255, 'value' => (($model->isNewRecord) ? $model->generateKode() : $model->noInventaris), 'readonly' => true)); ?>
    <?php echo $form->error($model, 'noInventaris'); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'noRuangan'); ?>
    <?php echo CHtml::activeDropDownList($model, 'noRuangan', $model->getRuangan(), array('prompt' => 'Pilih Ruangan', 'class' => 'form-control')); ?>
    <?php echo $form->error($model, 'noRuangan', array('class' => 'label label-important', 'style' => 'width:30%')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'kodeBarang'); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $model,
        'attribute' => 'kodeBarang',
        'source' => $this->createUrl('asetBarang/suggestBarang'),
        'htmlOptions' => array(
            'size' => '40',
            'style' => 'width:30%'
        ),
        'options' => array(
            'showAnim' => 'fold',
            'select' => 'js:function(event, ui){document.getElementById("hidden-namaBarang").innerHTML = "Nama Barang : "+ui.item.namaBarang;'
            . 'document.getElementById("hidden-jumlah").innerHTML = "Jumlah Awal : "+ui.item.jumlah;'
            . 'document.getElementById("txtJml").focus();  }',
        ),
    ));
    
    echo CHtml::label('Nama Barang : -', '', array('type'=>'hidden','id' => 'hidden-namaBarang','class'=>'label label-success','style'=>'width:30%'));
    echo CHtml::label('Jumlah Awal : -', '', array('id' => 'hidden-jumlah','class'=>'label label-warning','style'=>'width:30%'));
    ?>
   
    <?php echo $form->error($model, 'kodeBarang', array('class' => 'label label-important', 'style' => 'width:30%')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'Jumlah Mutasi'); ?>
    <?php echo $form->textField($model, 'jumlah', array('id'=>'txtJml','class' => 'form-control', 'style' => 'width:5%')); ?>
    <?php echo $form->error($model, 'jumlah', array('class' => 'label label-important', 'style' => 'width:30%')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'tanggal'); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $model,
        'attribute' => 'tanggal',
        'name' => 'tanggal',
        'options' => array(
            'showAnim' => 'fold',
            'altFormat' =>'yy-mm-dd',
            'dateFormat' => 'yy-mm-dd',
            'appendText' => ' yyyy-mm-dd',
            'changeMonth' => true,
            'changeYear' => true,
        ),
        'htmlOptions' => array(
            'style' => 'height:20px;',
            'value'=> date('Y-m-d'),
        ),
    ));
    ?>
<?php echo $form->error($model, 'tanggal', array('class' => 'label label-important','style' => 'width:30%')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'kondisi'); ?>
    <?php echo CHtml::activeDropDownList($model, 'kondisi', $model->getKondisi(), array('prompt' => 'Pilih Kondisi', 'class' => 'form-control')); ?>
    <?php echo $form->error($model, 'kondisi', array('class' => 'label label-important', 'style' => 'width:30%')); ?>
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
