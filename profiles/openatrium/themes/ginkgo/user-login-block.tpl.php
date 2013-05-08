<?php
  $login_form = get_user_login_form(); 
?>
<?php print $login_form->form_start; ?>
  Username: <?php print $login_form->name; ?><br />
  Password: <?php print $login_form->pass; ?><br />
  <?php print $login_form->submit; ?>
