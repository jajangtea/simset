<?php
/* @var $this InventarisasiController */
/* @var $data Inventarisasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('noInventaris')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->noInventaris), array('view', 'id'=>$data->noInventaris)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noRuangan')); ?>:</b>
	<?php echo CHtml::encode($data->noRuangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeBarang')); ?>:</b>
	<?php echo CHtml::encode($data->kodeBarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi')); ?>:</b>
	<?php echo CHtml::encode($data->kondisi); ?>
	<br />


</div>