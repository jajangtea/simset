<?php
/* @var $this AsetController */
/* @var $data Aset */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_aset')); ?>:</b>
	<?php echo CHtml::encode($data->id_aset); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg')); ?>:</b>
	<?php echo CHtml::encode($data->reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ruangan')); ?>:</b>
	<?php echo CHtml::encode($data->id_ruangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jenis')); ?>:</b>
	<?php echo CHtml::encode($data->id_jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_barang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merk')); ?>:</b>
	<?php echo CHtml::encode($data->merk); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('no_sertifikat')); ?>:</b>
	<?php echo CHtml::encode($data->no_sertifikat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bahan')); ?>:</b>
	<?php echo CHtml::encode($data->bahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asal')); ?>:</b>
	<?php echo CHtml::encode($data->asal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ukuran')); ?>:</b>
	<?php echo CHtml::encode($data->ukuran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('satuan')); ?>:</b>
	<?php echo CHtml::encode($data->satuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi')); ?>:</b>
	<?php echo CHtml::encode($data->kondisi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml')); ?>:</b>
	<?php echo CHtml::encode($data->jml); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	*/ ?>

</div>