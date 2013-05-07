<h1>Change Password for user <?php echo Yii::app()->user->id;?></h1>


//

<p>Please fill out the following form :</p>

<div class="wide form">
<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'changePassword-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'oldPassword'); ?>
		<?php echo $form->passwordField($model,'oldPassword'); ?>
		<?php echo $form->error($model,'oldPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'newPassword'); ?>
		<?php echo $form->passwordField($model,'newPassword'); ?>
		<?php echo $form->error($model,'newPassword'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'confirmPassword'); ?>
		<?php echo $form->passwordField($model,'confirmPassword'); ?>
		<?php echo $form->error($model,'confirmPassword'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Change Password'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

