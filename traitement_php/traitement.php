<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nom = htmlspecialchars($_POST['firstname']);
    $prenom = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $numeroDeTelephone = htmlspecialchars($_POST['phone']);
    $Adresse = htmlspecialchars($_POST['address']);
    $naissance = htmlspecialchars($_POST['naissance']);
    $motDePasse = htmlspecialchars($_POST['password']);
    $reMotDePasse = htmlspecialchars($_POST['Repassword']);
    $profession = htmlspecialchars($_POST['qusOne']);
    $interest = htmlspecialchars($_POST['qusTwo']);
    $level = htmlspecialchars($_POST['qusThree']);

    if(!isset($nom, $prenom, $email, $numeroDeTelephone, $Adresse, $naissance, $motDePasse, $reMotDePasse, $profession, $interest, $level))
    {
       echo"Tout les champs doivent êtres remplis";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo"Veuillez entrer une adresse E-mail valide";
    }elseif($motDePasse !== $reMotDePasse){
        echo"Les deux mots de Passe ne correspondent pas";
    }else{
        //Connexion avec la base de Données
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db_name = 'echecs';
        
    }


}