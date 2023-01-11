<?php
session_start();
require("../../settings/settings.php");

if (isset($_POST['validate'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check_if_admin_exists = $bdd->prepare("SELECT * FROM admin WHERE email = ?");
        $check_if_admin_exists->execute([$email]);
        $admin = $check_if_admin_exists->fetch();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                $_SESSION['id'] = $admin['id'];
                $_SESSION['email'] = $admin['email'];
                header("location: ../index.php?success=connexion");
            } else {
                header("location: ../connexion.php?error=password");
            }
        } else {
            header("location: ../connexion.php?error=absent");
        }
    } else {
        header("location: ../connexion.php?error=champs");
    }
}