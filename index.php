<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style8.css">
    
    <?php include "connexion.php" ?>
 </head>
    <?php 
        $bdd = new PDO('mysql:host=localhost;dbname=carwash;charset=utf8','root', '');
    ?>
<body> 
<div class="nana1">
 <form class="nere11" method="POST" action="header.php">
    <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="users_name" class="form-control" placeholder="Enter username">
    <small  class="form-text text-muted"></small>
    </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="PASSWORD" class="form-control" id="exampleInputPassword1" placeholder="password">
  </div>
  <p>Forgot&nbsp<a href="#">Password?</a></p>
  <br>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <br>
  <button type="submit" name="valider" value="Connect us" class="btn btn-warning  text-white">Connect Us</button>
   <button type="reset" value="Annuler" class="btn btn-warning  text-white">Annuler</button>
  </form>
</div>


    <?php
    if(isset($_POST["send"])){
    $recupuser = $_POST["users_name"];
    $recuppassword = $_POST["PASSWORD"];
    $trouveusers = $bdd->prepare("Select * from users where users_name= :users and PASSWORD= :pass");
                $trouveusers->bindParam(':users', $recupuser, PDO::PARAM_STR);
                $trouveusers->bindParam(':pass', $recuppassword, PDO::PARAM_STR);
                $trouveusers->execute();
                if($trouveusers->rowCount() > 0){

                }

                else{
                    echo "Parametre incorrect";
                }
    }
    ?>
</body>
</html>
