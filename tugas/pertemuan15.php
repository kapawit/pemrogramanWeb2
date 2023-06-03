<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username != null && $username == "admin" && $password != null && $password == "password") {
    $_SESSION["username"] = $username;
    echo '<div class="alert alert-primary" role="alert">
        Selamat Datang '.$username.'
      </div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">
      Username Atau Password salah !
    </div>';
  }
}

if($_SERVER["REQUEST_METHOD"] == "POST" &&  isset($_POST["logout"])) {
  session_unset();
  session_destroy();
  echo '<div class="alert alert-info" role="alert">
        Sukses Logout
      </div>';
}

?>

<?php if (isset($_SESSION["username"])){ ?>
  <form action="" method="post">
    <input class="btn btn-danger" type="submit" name="logout" value="logout"> 
  </form>
  <?php } else { ?>
    <div class="d-flex justify-content-center my-5">
      <div class="card" style="width:400px;">
      <div class="card-header">
        <h3>Login</h3>
      </div>
      <div class="card-body">
      <?php echo isset($_SESSION["username"]);?>
        <form action='' method='post'>
          <label for="username">Username</label>
          <input class="form-control" type='text' name='username' placeholder="admin">
          <label for="password">Password</label>
          <input class="form-control" type='password' name='password' placeholder="password">
          <div class="d-grid gap-2">
            <hr>
            <input class="btn btn-primary mt-3" type='submit' value='Login'>
          </div>
        </form>
      </div>
    </div>
  </div>


<?php }?>
