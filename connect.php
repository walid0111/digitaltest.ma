<html>
    <head>

    </head>
    <body>
        <h1>connexion</h1>
        
    </body>
</html>

<?php
$con=new PDO("mysql:host=localhost; dbname=point",'root','walid');


$email=$_POST['mail'];
$password=$_POST["pass"];

if(isset($_POST["sub"])){


    $con1=$con->query("SELECT * FROM personne WHERE email='$email' and pass='$password'")->fetch();


    if($con1){
            echo"vous etes connecte en tant que ".$email;
            echo"<br>";
            echo"vous avez ".$con1['points']." points";
        }
    else{
            
            echo"email ou pass est incorrect ";
            echo"<a href='formulaire.html'>Revenir a la page de connexion</a>";
            

        }
    



    if($email=="admin@admin" and $password=="19011902"){
        header('location:admin.php');
    }
}






?>