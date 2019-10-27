<?php

include 'engine/autoload.php';
autoload('config');

include ENGINE_DIR.'getUser.php';
include ENGINE_DIR.'login_controller.php';
//tst
// session_start();
// print_r($_SESSION);
// print_r($_COOKIE);

include PUBLIC_DIR.'header.php';

?>

<form method="post" style="width: 300px;" class="ml-5">
  <div class="form-group">
    <input name = "login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
  </div>
  <div class="form-group">
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Запомнить</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php if ($status != ''):?>
<div class="alert alert-danger"><?=$status ?></div>
<?endif;?>

<br>
<a class="alert alert-warning m-3" href="public/registration_room.php">Регистрация</a>
