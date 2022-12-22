<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4 rounded-lg">
      <h2 class="card-title text-center">Registrieren</h2>
      <form class="form-signin" action="<?php echo base_url()."index.php/login_controller/newuser"?>" method="post">
          <div class="form-group">
            <label for="firstName">Vorname</label>
            <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Gib deinen Vornamen ein">
          </div>
          <div class="form-group">
            <label for="lastName">Nachname</label>
            <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Gib deinen Nachnamen ein">
          </div>
          <div class="form-group">
            <label for="username">Benutzername</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Wähle einen Benutzernamen">
          </div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Gib deine E-Mail-Adresse ein">
          </div>
          <div class="form-group">
            <label for="password">Passwort</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Wähle ein Passwort">
          </div>
          <div class="form-group">
            <label for="passwordConfirm">Passwort bestätigen</label>
            <input type="password" class="form-control" id="passwordConfirm" name="confirm_password" placeholder="Bestätige dein Passwort">
          </div>
          <input type="submit" value="Registrieren" class="btn btn-lg btn-primary btn-block text-uppercase">
        </form>
      </div>
    </div>
  </div>
</div>
