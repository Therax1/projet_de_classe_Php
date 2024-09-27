<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $prenom = htmlspecialchars($_POST['firstname']);
    $nom = htmlspecialchars($_POST['lastname']);
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

        //Hashage du mot de Passe 
        $passwordHash = password_hash($motDePasse, PASSWORD_BCRYPT);
        //Nécessaire à la Connexion avec la base de Données
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db_name = 'echecs';
        
        //connexion avec la base de donnée en utilisant mysqli 

        $connexion = new mysqli($servername, $username, $password, $db_name);

        //Erreur de connexion avex la base de données 
        if($connexion -> connect_error){
            die("Échec de la connexion : " . $connexion->connect_error);
        }

        // preparation des requetes sql
        $requetesql = "INSERT INTO utilisateurs (prenomUser, nomUser, email, Telephone, adresse, Date_de_Naissance, Mot_de_Passe, ProfessionUtilisateur, Centre_Interets, LevelUser) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connexion->prepare($requetesql);
        $stmt->bind_param("sssissssss", $prenom, $nom , $email, $numeroDeTelephone, $Adresse, $naissance, $passwordHash, $profession, $interest, $level);

        if ($stmt->execute()) {
            echo"Nouvel enregistrement créé avec succès";
        } else {
            echo "Erreur : " . $sql . "<br>" . $connexion->error;
        }

        // Fermer la connexion
        $stmt->close();
        $connexion->close();
    }


}