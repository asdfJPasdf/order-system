<body>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h2 class="card-title text-center">Log In</h2>
            <form class="form-signin" action="<?php echo base_url()."login_controller/check_login"?>" method="post">
              <div class="form-label-group">
                <label for="inputUsername">Benutzername</label>
                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Benutzername" required autofocus>
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Passwort</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Passwort" required>
              </div>
              <br>
              <input type="submit" value="Einloggen" class="btn btn-lg btn-primary btn-block text-uppercase">
              <hr class="my-4">
              <a href="<?php echo base_url().'login_controller/signup' ?>" class="btn btn-lg btn-secondary btn-block text-uppercase">Sign up</a>
            </form>
          </div>
        </body>
    </html>