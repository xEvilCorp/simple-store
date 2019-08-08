<?php require 'orm/rb.php'; ?>
<?php R::setup('mysql:host=localhost;dbname=bancoloja', 'root', ''); ?>

Home
<?php
if (isset($_GET['id'])) {
    echo $_GET['id'];
}
?>