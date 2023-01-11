<?php
require("../../settings/settings.php");


if (isset($_POST['validate'])) {
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_c'])) {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_c = $_POST['password_c'];


        $check_if_user_exists = $bdd->prepare("SELECT * FROM admin WHERE email = ?");
        $check_if_user_exists->execute([$email]);
        $user = $check_if_user_exists->fetch();


        if (!$user) {

            if ($password = $password_c) {
                $insert_admin = $bdd->prepare("INSERT INTO admin (first_name, last_name, email, password) VALUES (?,?,?,?)");
                $insert_admin->execute([
                    $first_name,
                    $last_name,
                    $email,
                    password_hash($password, PASSWORD_DEFAULT)
                ]);
            } else {
                header("location: ../inscription.php?error=password");
            }
        } else {
            header("location: ../inscription.php?error=user");
        }
    } else {
        header("location: ../inscription.php?error=champs");
    }
    header("location: ../connexion.php?success=inscrit");
}