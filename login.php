<?php
session_start();
require_once('templates/header.html');
require_once('templates/nav.html');
?>

<section class="container">
    <form id="register" action="register.php" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mdp</label>
            <input type="text" name="password" required>
        </div>
        <input type="submit" class="btn btn-outline-secondary" value="Se connecter">
    </form>
</section>