<html>
    
    <marquee behavior="" direction="left" ><h1>Admin Page</h1></marquee>
    <table>
        <tr>
            <td>
              <form action="" method="post">
                <input type="email" name="mail1" id="" placeholder="email de la perssone">
                <br>
                <input type="submit" name="sub1"value="Afficher Point">
                </form>  
            </td>
            <td>
            <form action="" method="post">
                <input type="email" name="mail1" id="" placeholder="email de la perssone">
                <br><input type="number" name="numb" id="" placeholder="Prix vente"><br>
                <input type="submit" name="sub2"value="Ajouter Point">
                </form>   
            </td>
            <td>
            <form action="" method="post">
                <input type="email" name="mail1" id="" placeholder="email de la perssone">
                <br><input type="number" name="numb" id="" placeholder="Redeem/supprimer Points"><br>
                <input type="submit" name="sub3"value="Redeem">
                </form>   
            </td>
        </tr>
    </table>
    
</html>

<!-- affiche le nombre de points -->
<?php
$mail3=$_POST["mail1"];
$number2=$_POST["numb"];

$con5=new PDO("mysql:host=localhost; dbname=point",'root','walid');


if(isset($_POST['sub1'])){
    $con3=$con5->query("SELECT * FROM personne WHERE email='$mail3' ")->fetch();
    
    
    if($con3){
     
        echo "L'email ".$mail3. " A ".$con3['points']." points";
     
    }
    else{
        echo"faute";
    }
}


?>

<!-- Ajouter points -->
<?php
if(isset($_POST['sub2'])){
    
    $con3=$con5->query("SELECT * FROM personne WHERE email='$mail3' ")->fetch();
    
    
    if($con3){
        $total=$con3['points'] + $number2/20;
        
        $co3=$con5->query("UPDATE personne SET points='$total' WHERE email='$mail3' ");
        if($co3){
            echo"L'email ".$mail3." A ".$total." Points";
        }
        
        

    }
    else{
            echo"incorrect mail";
        }
}
?>

<!-- supprimer points -->

<?php
if(isset($_POST['sub3'])){
    
    $con3=$con5->query("SELECT * FROM personne WHERE email='$mail3' ")->fetch();
    
    
    if($con3){
        $total=$con3['points'] - $number2;
        
        $co3=$con5->query("UPDATE personne SET points='$total' WHERE email='$mail3' ");
        if($co3){
            echo"L'email ".$mail3." A ".$total." Points";
        }
        
        

    }
    else{
            echo"incorrect mail";
        }
        
}echo"<a href='formulaire.html'>Revenir a la page de connexion</a>";