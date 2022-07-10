

<?php
$con=new PDO("mysql:host=localhost; dbname=point",'root','walid');


$emaill=$_POST["maill"];
$passwordd=$_POST["passs"];

if(isset($_POST["sub"])){
    if(empty($emaill) || empty($passwordd)){
        echo"veuillez remplir les champs";
        
    }
    else{
        $con21=$con->query("INSERT INTO personne (email, pass, points) VALUES ('$emaill','$passwordd','0')");
        echo"Votre compte a ete creer avec succes -> ";
        echo'<button><a href="formulaire.html">Se connecter</a></button>';
    }
}

?>