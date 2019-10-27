<?php
include '../engine/autoload.php';
autoload('../config');

include ENGINE_DIR.'regUser.php';

$regSuccessful = regUser($_POST['login'], $_POST['password']);
// session_start();

include PUBLIC_DIR.'header.php';

?>
<h5 class="alert alert-primary m-5">Регистрация</h5>
<h6 class="alert alert-success m-5"><?=$regSuccessful?></h6>
<form method="post" style="width: 300px;" class="ml-5">
  <div class="form-group">
    <input name = "login" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter login">
  </div>
  <div class="form-group">
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Запомнить</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
  <a class="alert alert-dark m-3" href="../login.php">login</a>
</form>

<?php if ($status != ''):?>
<div class="alert alert-danger"><?=$status ?></div>
<?endif;?>

