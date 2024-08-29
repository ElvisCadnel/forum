<?php
      require('actions/users/securityaction.php');
      require('actions/questions/publish-questionaction.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
   <?php include 'includes/navbar.php'?>
<br><br>
<section class="d-flex justify-content-between align-items-center container">
   <div class="" style="width: 60%;">
   <h1 class="mb-3 h3">Publier un sujet</h1>
   <p class=" m-0 "><span>Publier des sujets, des questions, des astuces, des conseils. Ce forum vous permettra d'apprendre, de partager vos connaissances à d'autres utilisateur.</span> </p>
   </div>
   <div style="width: 40%;" class="d-flex justify-content-center align-items-center">
   <img width="300px" class="img-fluid" src="assets/img/publication.png" alt="">
   </div>
</section>
    
<div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="">
                <div class="card p-4 px-5 border-0  shadow">
                    <form method="POST">
                <!-- message de remplissage  -->
                    <?php 
                    if(isset($errormsg)){ 
                        echo '<div class=" alert alert-danger" role="alert"><p class="text-center m-0">'.$errormsg.'</p></div>';
                        }  elseif(isset($succesmsg)){
                        echo '<div class=" alert alert-success" role="alert"><p class="text-center m-0">'.$succesmsg.'</p></div>';
                        }
                    ?>
 
                    <div class="form-group py-3 ">
                            <label for="nom">Titre de la publication</label>
                            <input type="text" name="title" class="form-control animated-input" id="nom" >
                          </div>
                          <div class="form-group py-3">
                            <label for="description">Description</label>
                            <textarea  name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group py-3 ">
                            <label for="contenu">Contenu</label>
                            <textarea  name="content" class="form-control"></textarea>
                        </div>
                        <!-- <div class="form-group mb-4 py-3">
                            <label for="img" class="upload">Ajoutez une image a votre publication</label>
                            <input type="file" name="img" id="imgInput" class="form-control ">
                        </div> -->
                        <p class="text-center px-5 mx-5">   <button type="submit" name="validate" class="btn btn-primary btn-block px-3 py-2 rounded-pill" > Publier </button></p>
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php';?>

</body>
</html>

