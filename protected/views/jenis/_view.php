<?php
/* @var $this JenisController */
/* @var $data Jenis */
?>

<div class="view">
    <b><?php echo CHtml::encode($data->getAttributeLabel('namaJenis')); ?>:</b>
    <?php echo "<span class='label label-important'>".CHtml::encode($data->namaJenis)."</span>"; ?>
    <br />
</div>