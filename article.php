<?php
 require('actions/users/securityaction.php'); 
  require("actions/questions/showarticleContentaction.php");
  require('actions/questions/postanswersaction.php');
  require('actions/questions/showallanswersofcomentaction.php');
?>
<!DOCTYPE html>

<html lang="en">
<?php
include 'includes/head.php';
?>

<body>

    <?php
include 'includes/navbar.php';
?>

    <div class="container mt-5">
        <?php
    if(isset($errormsg)){echo $errormsg;}

    if(isset($question_publication_date)){
     ?>
        <section class="show-content">

            <span class="card-header bg-success-subtle d-flex justify-content-between align-items-center">
              <a  href="profile.php?id=<?=$question_id_auteur?>">  <h1 class="h5 ">
                    <i class="bi bi-person-circle"></i>
                    <?= $question_pseudo_auteur;?>
                </h1>
              </a>
                <p class="text-end"><small><?= $question_publication_date;?></small></p>
            </span>

            <div class="card-body pb-0">
                <h4 style="text-align: justify;"> <?= $question_title;?></h4>
                <hr>
                <p style="text-align: justify;"> <?= $question_contenu;?></p>

            </div>
            <p class="mb-5 card-footer p-1 bg-danger-subtle"><button class="btn" type="button"> <i class="bi bi-hand-thumbs-up"></i> J'aime</button>
                <button class="btn " type="button"> <i class="bi bi-hand-thumbs-down"></i>J'aime pas</button>
                <button class="btn" type="button"> <i class="bi bi-star"></i> Favoris</button>
            </p>
        </section>
        <section class="show-answers mt-3 p-0 container">
            <form class="form-group " method="POST">
                   <textarea class="form-control" rows="4" name="textarea" placeholder="Votre commentaires ..."></textarea>
                   <br>
                   <label class="form-label">
                        <button name="validate" class="btn btn-primary btn-inline" type="submit">
                            Commenter <i class="bi bi-send"></i>
                        </button>
                    </label>

                </div>
            </form>
          
         <div class="container py-3 mb-5"> <h3>Commentaires</h3></div>
        </section>

        <?php
    }
     ?>
     <?php
         
        while($comment = $getallanswers->fetch()){
          ?>
           <section class="ml-5">
        <div class="card container border-0  mb-4 ">
          <div class=" card-header text-white bg-dark">
          <h1 class="h5 ">
            <a href="profile.php?id=<?=$comment['id_autheur']?>">
                    <i class="bi bi-person-circle"></i>
                    <?= $comment['pseudo_auteur'];?>
            </a>
          </h1>
          </div>
          
            <div class="card-body" style="text-align: justify;">
              <?=$comment['commentaire'];?>
            

            </div>
            <p class="card-footer m-0 p-0">
                <button class="btn" type="button"> <i class="bi bi-hand-thumbs-up"></i> J'aime</button>
                <button class="btn" type="button"> <i class="bi bi-hand-thumbs-down"></i>J'aime pas</button>
            </p>
            <p class="text-end">
              <small class="text-muted">
                Posté le : <?= $comment['date_comment'];?>
              </small>
            </p>
          
        </div>
       </section>
          <?php
        }

     ?>
    </div>
<?php include 'includes/footer.php';?>
   
</body>

</html>