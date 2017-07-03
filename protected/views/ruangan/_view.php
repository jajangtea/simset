<?php
/* @var $this RuanganController */
/* @var $data Ruangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('noRuangan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->noRuangan), array('view', 'id'=>$data->noRuangan),array('class'=>'label label-success')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->namaRuangan); ?>
	<br />

        <b class="label label-warning"><?php echo CHtml::encode($data->getAttributeLabel('Penanggung Jawab')); ?>:</b>
        <b class="label label-info"><?php echo CHtml::encode($data->idPenanggungJawab0->realname); ?></b>
	<br />
</div>