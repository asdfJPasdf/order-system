<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4 rounded-lg">
      <h2 class="card-title text-center">Registrieren</h2>
      <form class="row g-3" action="<?php echo base_url()."login_controller/newuser"?>" method="post">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Name</label>
    <input type="text" class="form-control" id="firstName" name="first_name"  required>
    <div class="valid-feedback">
      Korekkt ausgefüllt!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Nachname</label>
    <input type="text" class="form-control" id="lastName" name="last_name"  required>
    <div class="valid-feedback">
    Korekkt ausgefüllt!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Nutzername</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control" id="username" name="username"  required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Bitte wählen Sie einen Nutzernamen.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email"  required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Bitte geben Sie eine E-mail ein.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Adesse</label>
    <input type="text" class="form-control" id="address" name="address"  required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Bitte geben Sie eine Adresse ein.
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationServer04" class="form-label">Passwort</label>
    <input type="password" class="form-control" id="password" name="password"  required>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Bitte geben Sie ein Passwort ein.
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationServer05" class="form-label">Passwort wiederholen</label>
    <input type="password" class="form-control" id="passwordConfirm" name="confirm_password"  required>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Bitte bestätigen Sie das Password.
    </div>
  </div>
  
  <div class="col-md-4">
    <button class="btn btn-primary" type="submit">Registrieren</button> 
  </div>
<div class="col-md-6">
    <a href="<?php echo base_url()?>login" class="btn btn-link">zum Login</a>
</div>
</form>


      </div>
    </div>
  </div>
</div>