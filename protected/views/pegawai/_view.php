<?php
/* @var $this PegawaiController */
/* @var $data UserPegawai */
?>

<div class="view">
    <b><?php echo CHtml::encode($data->getAttributeLabel('Nama')); ?>:</b>
    <?php echo "<span class='label label-warning'>".CHtml::encode($data->realname)."</span>"; ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Telepon')); ?>:</b>
    <?php echo CHtml::encode($data->tlp); ?>
    <br />
</div>