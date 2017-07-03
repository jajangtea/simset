<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row-fluid">

        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => "Registrasi User",
        ));
        ?>
        <div class="span6">
            <div class="row">
                <?php echo $form->labelEx($model, 'username'); ?>
                <?php echo $form->textField($model, 'username', array('size' => 20, 'maxlength' => 20, 'class' => 'span12')); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'password'); ?>
                <?php echo $form->passwordField($model, 'password', array('size' => 50, 'maxlength' => 50)); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'password2'); ?>
                <?php echo $form->passwordField($model, 'password2', array('size' => 50, 'maxlength' => 50)); ?>
                <?php echo $form->error($model, 'password2'); ?>
            </div>
        </div>
        <div class="span6">
            <div class="row">
                <?php echo $form->labelEx($model, 'realname'); ?>
                <?php echo $form->textField($model, 'realname', array('size' => 50, 'maxlength' => 50, 'class' => 'span12')); ?>
                <?php echo $form->error($model, 'realname'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'email'); ?>
                <?php echo $form->textField($model, 'email', array('size' => 50, 'maxlength' => 50, 'class' => 'span12')); ?>
                <?php echo $form->error($model, 'email'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'tlp'); ?>
                <?php echo $form->textField($model, 'tlp', array('size' => 50, 'maxlength' => 50)); ?>
                <?php echo $form->error($model, 'tlp'); ?>
            </div>
            <div class="row">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Registrasi' : 'Save', array('class' => 'btn btn-primary')); ?>
                <br/><br/>
            </div>
        </div>
    </div>
    <div class="row" >
    </div>

    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div><!-- form -->