<?php if($alert == 1){ ?>
<div class="alert alert-success" role="alert">
  Bestellung wurde erfolgreich aufgegeben!
</div>

<?php }
    if($alert == 2) {
?>
<div class="alert alert-info" role="alert">
  Artikel wurde in den Warenkorb hinzugefügt!
</div>

<?php }
    if($alert == 3) {
?>
<div class="alert alert-info" role="alert">
  Der Artikel wurde erfolgreich aus dem Warenkorb gelöscht!
</div>
<?php } 

    if($alert == 4) {
?>
<div class="alert alert-danger" role="alert">
  Der Benutzername oder Passwort stimmen nicht !
</div>
<?php } ?>