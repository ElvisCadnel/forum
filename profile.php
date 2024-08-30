<?php
 require('actions/users/securityaction.php');
 require ('actions/users/showUserProfileaction.php');
 require ('image.php');
 $images = [
    "./assets/img/card1.png",
    "./assets/img/card2.png",
    "./assets/img/card3.png"
];


?>

<!DOCTYPE html>
<html lang="en">
<?php
  include("includes/head.php");
?>

<body>

    <?php
  include("includes/navbar.php");
?>
    <?php 
        if(isset($errormsg)){ 
            echo '<div class=" alert alert-danger" role="alert"><p class="text-center m-0">'.$errormsg.'</p></div>';
            }

            if(isset($getQuestionuser)){
             ?>
    <div class="container mt-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 d-md-flex mb-5">
                <div class="card col-lg-5  col-md-6 card-profile shadow-sm bg-dark text-white">
                    <section class="d-lg-flex justify-content-center align-items-center">
                        <div class="position-relative">
                            <div id="profilePic" class="profile-icon">
                                <img src="actions/users/images/<?=$user_image?>" alt="">
                            </div>
                        </div>
                        <div class="card-body text-lg-start text-center">
                            <h5 class="card-title">@<?= $user_pseudo ?></h5>
                            <a href="mailto:<?= $user_email ?>">
                                <p class="card-text mb-2"><?= $user_email ?></p>
                            </a>
                            <p class="card-text"><?= $user_name ?></p>
                        </div>
                    </section>
                </div>

                <div class="pl-md-4 col-md-6 col-lg-7 pt-md-0 pt-2">
                    <h1 class="h5 card-header bg-dark-subtle">Biographie de <?= $user_pseudo?></h1>
                    <h6 style="text-align: justify;" class="card-body">Je suis développeur web et mobile, spécialisé
                        dans la création d'applications modernes et réactives. Je maîtrise les technologies front-end et
                        back-end, ce qui me permet de concevoir des solutions complètes et performantes. Mon expertise
                        englobe l'ensemble du cycle de développement, de la conception à la mise en production.
                    </h6>
                    </h5>

                </div>

            </div>

            <h1 class="card-header h3 border-0 mt-5 bg-dark text-white ">Publications de <?= $user_pseudo?></h1>
<br><br>
            <?php
// Initialisation du compteur
$index = 0;

// Boucle sur les questions
while ($question = $getQuestionuser->fetch()) {
    // Déterminer l'image à utiliser
    $imageSrc = $images[$index % count($images)];
    
    ?>
            <div id="taille" class="mt-5 container card mb-3 border-0 shadow " style="max-width: 80%; ">
                <div class="row g-0">
                    <div id="s" class=" col-md-3 d-flex justify-content-center align-items-center container "
                        style="width: 100%;">
                        <img src="<?= $imageSrc ?>" class="img-fluid rounded" alt="Image error Uploading">
                    </div>
                    <div class="col-md-9">
                        <div class="py-0 card-body">
                            <h5 class="card-header border-0 my-2 pl-1 text-align-justify">
                                <?= $question['titre'] ?>
                            </h5>
                            <p class="card-title text-align-justify">

                                <?= str_replace('<br />','',$question['description']);
                $question['description'] ?>
                            </p>
                            <p class="card-text"><small class="text-body-secondary">Date de la publication:
                                    <?= ($question['date_publication']) ?></small></p>

                            <a href="article.php?id=<?=$question['id'];?>" class="btn btn-primary ">Voir</a>

                            <!--rediriger l'utilisateur vers editquestions tout en specifiant id de la publication en href -->
                            <p class="text-end mt-1 card-footer border-0">Publié par :
                                <?= ($question['pseudo_auteur']) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <?php
    // Incrémenter le compteur
    $index++;
}
?>

            <div>



            </div>

        </div>
    </div>


    <?php
            }
        ?>

    <?php include 'includes/footer.php';?>


</body>

</html>