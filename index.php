<?php
include_once './lib/loader.php';
?>

<form method="post" action="connexion.php">
    <input type="hidden" value="<?php echo CSRF::getToken(); ?>" name="<?php echo CSRF::$fieldName; ?>">
    <input type="submit" value="Connexion">
</form>