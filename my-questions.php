<?php 
require('actions/users/securityaction.php'); 
require('actions/questions/myQestionsaction.php'); 

// Liste des images à utiliser
$images = [
    "./assets/img/card1.png",
    "./assets/img/card2.png",
    "./assets/img/card3.png"
];
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/navbar.php' ?>
    <br><br>

    <h1 class="card-header border-0 h3 shadow-sm bg-dark text-white">Pramètres</h1>
    <br><br>

    <div id="backs" class="position-relative d-flex">
        <video width="200px" class="video-background" autoplay muted loop>
            <source src="assets/img/AppsDev.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>
    </div>

    <?php
// Initialisation du compteur
$index = 0;

// Boucle sur les questions
while ($question = $getAllQestions->fetch()) {
    // Déterminer l'image à utiliser
    $imageSrc = $images[$index % count($images)];
    
    ?>
    <div id="taille" class="mt-5 container card mb-3 border-0 shadow animate" style="max-width: 80%; ">
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
                    <a href="editquestion.php?id=<?= $question['id']; ?>" class="btn btn-warning mx-2 ">Modifier</a>
                    <!--supprimer une publication tout en specifiant id de la publication en href -->

                    <p class="mt-1 text-end">
                        <a href="actions/questions/deletequestionaction.php?id=<?= $question['id']; ?>"
                            class="btn btn-danger ">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    <p>


                    <p class="text-end mt-1 card-footer border-0">Publié par : <?= ($question['pseudo_auteur']) ?></p>
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

    <?php include 'includes/footer.php';?>

</body>

</html>