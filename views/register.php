<h1>Create an account</h1>
<?php $form = \app\core\form\Form::begin('', "post"); ?>

  <div class="row">
    <div class="col">
      <?php echo $form->field($model, 'firstname') ?>
    </div>
    <div class="col">
      <?php echo $form->field($model, 'lastname') ?>
    </div>
  </div>
  
  
  <?php echo $form->field($model, 'email') ?>
  <?php echo $form->field($model, 'password')->passwordField() ?>
  <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>

  <button type="register" class="btn btn-primary mb-1">Register</button>

<?php echo \app\core\form\Form::end(); ?>

