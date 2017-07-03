<?php
/* @var $this AsetTanahController */
/* @var $data AsetTanah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTanah')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTanah), array('view', 'id'=>$data->idTanah)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suratTanah')); ?>:</b>
	<?php echo CHtml::encode($data->suratTanah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglPengadaan')); ?>:</b>
	<?php echo CHtml::encode($data->tglPengadaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilaiAset')); ?>:</b>
	<?php echo CHtml::encode($data->nilaiAset); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('katerangan')); ?>:</b>
	<?php echo CHtml::encode($data->katerangan); ?>
	<br />


</div>