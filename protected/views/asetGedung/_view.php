<?php
/* @var $this AsetGedungController */
/* @var $data AsetGedung */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idGedung')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idGedung), array('view', 'id'=>$data->idGedung)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaGedung')); ?>:</b>
	<?php echo CHtml::encode($data->namaGedung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas')); ?>:</b>
	<?php echo CHtml::encode($data->luas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglPengadaan')); ?>:</b>
	<?php echo CHtml::encode($data->tglPengadaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilaiAset')); ?>:</b>
	<?php echo CHtml::encode($data->nilaiAset); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>