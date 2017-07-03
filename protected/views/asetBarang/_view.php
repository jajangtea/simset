<?php
/* @var $this AsetBarangController */
/* @var $data AsetBarang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeBarang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kodeBarang), array('view', 'id'=>$data->kodeBarang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaBarang')); ?>:</b>
	<?php echo CHtml::encode($data->namaBarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama Jenis')); ?>:</b>
	<?php echo CHtml::encode($data->idJenis0->namaJenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufaktur')); ?>:</b>
	<?php echo CHtml::encode($data->manufaktur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merk')); ?>:</b>
	<?php echo CHtml::encode($data->merk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warna')); ?>:</b>
	<?php echo CHtml::encode($data->warna); ?>
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

	*/ ?>

</div>