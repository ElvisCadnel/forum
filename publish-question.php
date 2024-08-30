<?php
      require('actions/users/securityaction.php');
      require('actions/questions/publish-questionaction.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<svg  xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
</svg>
<body>
    <?php include 'includes/navbar.php'?>
    <br><br>
    <section class="d-flex justify-content-between align-items-center container">
        <div class="" style="width: 60%;">
            <h1 class="mb-3 h3">Publier un sujet</h1>
            <p class=" m-0 "><span>Publier des sujets, des questions, des astuces, des conseils. Ce forum vous permettra
                    d'apprendre, de partager vos connaissances à d'autres utilisateur.</span> </p>
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
                        echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">'.$errormsg.'
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></p></button></div>';
                        }  elseif(isset($succesmsg)){
                        echo '<div style="height: 50px;" class="d-flex justify-content-center align-items-center alert p-0 alert-success d-flex align-items-center" role="alert">
                         <p>   <svg width="20" class="bi flex-shrink-0 mt-3 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                     <div>
                       '.$succesmsg.'
                      </div>
                    </div>
                        ';
                        }
                    ?>

                        <div class="form-group py-3 ">
                            <label for="nom">Titre de la publication</label>
                            <input type="text" name="title" class="form-control animated-input" id="nom">
                        </div>
                        <div class="form-group py-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group py-3 ">
                            <label for="contenu">Contenu</label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                        <!-- <div class="form-group mb-4 py-3">
                            <label for="img" class="upload">Ajoutez une image a votre publication</label>
                            <input type="file" name="img" id="imgInput" class="form-control ">
                        </div> -->
                        <p class="text-center px-5 mx-5"> <button type="submit" name="validate"
                                class="btn btn-primary btn-block px-3 py-2 rounded-pill"> Publier </button></p>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php';?>

</body>

</html>