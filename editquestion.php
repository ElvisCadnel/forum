<?php
  
  require('actions/users/securityaction.php');
  require('actions/questions/getInfosEditedQuestionAction.php');
  require('actions/questions/editquestionaction.php');
?>

<!DOCTYPE html>

<?php include 'includes/head.php' ?>

<html lang="en">
<body>
    <?php include 'includes/navbar.php' ?>
    <br>
    <div class="container">
    <?php 
        if(isset($errormsg)){ 
            echo '<div class=" alert alert-danger" role="alert"><p class="text-center m-0">'.$errormsg.'</p></div>';
            }
        ?>
        <?php
        if (isset($question_content)){
            ?>

        <div class="row justify-content-center align-items-center vh-100">
            <div class="">
                <div class="card p-4 px-5 border-0  shadow">
                    <h3 class="text-center mb-4">Modification </h3>
                    <form method="POST">
                <!-- message de remplissage  -->
                   
 
                    <div class="form-group py-3 ">
                            <label for="nom">Titre de la publication</label>
                            <input type="text" name="title" class="form-control animated-input" id="nom" value="<?=$question_title?>">
                          </div>
                          <div class="form-group py-3">
                            <label for="description">Description</label>
                            <textarea  name="description" class="form-control"><?=$question_desciption?></textarea>
                        </div>
                        <div class="form-group py-3 ">
                            <label for="contenu">Contenu</label>
                            <textarea  name="content" class="form-control"><?=$question_content?></textarea>
                        </div>
                        <!-- <div class="form-group mb-4 py-3">
                            <label for="img" class="upload">Ajoutez une image a votre publication</label>
                            <input type="file" name="img" id="imgInput" class="form-control ">
                        </div> -->
                        <button type="submit" name="validate" class="btn btn-primary btn-block" ></i> Appliquer la modification </button>
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<?php include 'includes/footer.php';?>

</body>
</html>