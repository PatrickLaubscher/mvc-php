<h1>Create an account</h1>
<?php echo \app\core\form\Form::begin('', "post"); ?>


<?php echo \app\core\form\Form::end(); ?>

<form action="" method="post">
  <div class="row">
      <div class="col">
          <div class="form-group mb-1">
              <label>First name</label>
              <input type="text" name="firstname" value="<?php echo $model->firstname; ?>" class="form-control<?php echo $model->hasError('firstname') ? ' is-invalid' : '' ?>">
              <div class="invalid-feedback">
                <?php echo $model->getFirstError('firstname'); ?>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="form-group mb-1">
              <label>Last name</label>
              <input type="text" name="lastname" class="form-control">
          </div>
        </div>
  </div>

  <div class="form-group mb-1">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
  </div>
  <div class="form-group mb-1">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <div class="form-group mb-1">
    <label>Confirm password</label>
    <input type="password" name="confirmPassword" class="form-control">
  </div>
  <button type="register" class="btn btn-primary mb-1">Register</button>
</form>
