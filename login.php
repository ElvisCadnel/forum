<?php require ('actions/users/loginaction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/navbar.php'?>
    
<div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class=" col-lg-5 ">
                <div class="card p-4 px-5 rounded border-0 shadow-lg  ">
                    <h3 class="text-center mb-4"><img style="width: 40px;" src="assets/img/logcon.png"> Connexion</h3>
                    <form method="POST">
                <!-- message de remplissage  -->
                    <?php if(isset($errormsg)){ echo '   <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">'.$errormsg.'
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></p></button></div>';}  ?>
 
                    <div class="form-group ">
                            <label for="nom">Pseudo</label>
                            <input type="text" name="nom" class="form-control animated-input" id="nom" placeholder="Pseudo">
                          </div>
                        <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control animated-input" id="email" placeholder="Email">
                        </div>
                        <div class="form-group mb-4">
                            <label for="motdepasse">Mot de passe</label>
                            <input type="password" name="mdp" class="form-control " placeholder="Password">
                        </div>
                         <p class="text-center">  <button type="submit" name="validate" class="btn btn-primary btn-block px-4 py-3 rounded-pill">Se connecter</button></p>
                        <p class="pt-2">Vous n'avez pas de compte ? <span><a href="signup.php">S'inscrire</a></span></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>