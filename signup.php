<?php require('actions/users/signupaction.php');
require('image.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php
 include 'includes/head.php';
?>
<body>
<?php include 'includes/navbar.php'?>

    <div class="container  my-5">
        <div class="row justify-content-center align-items-center vh-100">
            <div class=" col-lg-5 ">
                <div class="card p-4 px-5 rounded border-0 shadow-lg  ">
                    <h3 class="text-center mb-4"><img style="width: 40px;" src="assets/img/logcon.png"> Inscription</h3>
                    <form method="POST" enctype="multipart/form-data">
                <!-- message de remplissage  -->
                    <?php if(isset($errormsg)){ echo '<div class=" alert alert-danger" role="alert"><p class="text-center m-0">'.$errormsg.'</p></div>';}  ?>
 
                    
                          <div class="form-group ">
                            <label for="nom">Pseudo</label>
                            <input type="text" name="nom" class="form-control animated-input" id="nom" placeholder="Pseudo">
                          </div>
                       <div class="form-group ">
                            <label for="prenom">Nom</label>
                            <input type="text" name="prenom" class="form-control animated-input" id="prenom" placeholder="Nom">
                        </div>
                        <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control animated-input" id="email" placeholder="Email">
                        </div>
                        <div class="form-group mb-4">
                            <label for="motdepasse">Mot de passe</label>
                            <input type="password" name="mdp" class="form-control animated-input" id="motdepasse" placeholder="Password">
                        </div>

                        <div class="form-group mb-4">
                            <label for="images" class="drop-container" id="dropcontainer">Choissisez votre photo de profil</label>
                            <input type="file" name="image" id="image" accept="image/*"  class="form-control" required>
                        </div>

                        <p class="text-center">  <button type="submit" name="validate" class="btn btn-primary btn-block px-4 py-3 rounded-pill">S'inscrire</button></p>

                        <p class="pt-2">Vous avez déja un compte ? <span><a href="login.php">Se connecter</a></span></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    


    


</body>
</html>