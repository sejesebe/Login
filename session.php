<?
    session_start();
?>
<!DOCTYPE html>
<?php
$_SESSION['value']="Seb";
//$username="";
//$kodeord="";
        
/*Sessions 
 */

if(isset($POST['submit'])){
       $username = $_POST['navn'];
       $kodeord = $_POST['kode'];
       echo"Hello";

       if($username==="seb"&&$kodeord==="1234"){
           $_SESSION['login']=true;
           echo"Velkommen";
        }
        else {
            $_SESSION['login']=false;
            echo"Prøv igen";
            
        }
}
        
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form action="session.php" method="post">
            Navn: <input type="text" name="navn"><br>
            Kode: <input type="text" name="kode"><br>
            <input type="submit" name="submit" Value="Submit">
        </form>
        <a href="page2.php">Glemt brugernavn?</a>
    </body>
</html>
