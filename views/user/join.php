<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="panel panel-warning">
    <div class="panel-heading">
        <h1>Join</h1>
    </div>
<div class="panel-body">

  <?php $form = ActiveForm::begin(['id' => 'user-join-form'])?>
  <?= $form->field($userJoinForm, 'name') ?>
  <?= $form->field($userJoinForm, 'email') ?>
  <?= $form->field($userJoinForm, 'password')->passwordInput() ?>
  <?= $form->field($userJoinForm, 'confirmPassword')->passwordInput() ?>
  <?= Html::submitButton('Create',
      ['class' => 'btn btn-danger']) ?>

    <?php $form = \yii\widgets\ActiveForm::end();?>

</div>
</div>