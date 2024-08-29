<?php 
session_start();
require('actions/questions/showAllQuestionaction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'?>

<body>
    <?php include 'includes/navbar.php'?>

    <br>


    <div id="haut" class="container d-lg-flex justify-content-between align-items-center">
        <div class="left-part position-relative px-3 ">
            <span class="mr-5">
                <h1 class="h4 mt-4 " style="text-align:justify;">Bienvenue sur ForumDev. Forum pour devellopeur Web et
                    Mobile</h1>
            </span>
            <br><br>
            <p class="h6" style="text-align:justify;"> Sur ce forum de discussions, vous pouvez publier des sujets, des
                questions,
                des astuces, des conseils et également rechercher d'autres sujets sur les languages ou technologies web
                que vous utilisez.
            </p>

            <br><br><br><br><br><br>
            <p class=""><a class="nav-link px-5 py-3 text-white bg-primary d-inline rounded-pill"
                    href="publish-question.php">Get Started</a></p>
            <br><br>
        </div>
        <div class="right-part d-flex justify-content-center align-items-center">
            <video width="500" class="object-fit-fill img-sm-fluid  rounded-pill" autoplay>
                <source src="assets/img/DevCodingStart.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise vidéo.
            </video>

        </div>

    </div>

    <div id="haut" class="container d-lg-flex justify-content-between align-items-center">
        <div class="right-part py-5 d-flex justify-content-center align-items-center animate">
            <img width="470" class="rounded-pill img-sm-fluid" src="assets/img/IA.png">
        </div>
        <div class="left-part position-relative ms-3 px-3 animate">
            <span class="mr-5">
                <h1 class="h4 mt-4 " style="text-align:justify;">Approndir ses connaissances avec de nouvelle
                    technologie</h1>
            </span>
            <br><br>
            <p class="h6" style="text-align:justify;">
                Plongez au cœur des nouvelles technologies et des langages de programmation pour approfondir vos
                compétences et rester à la pointe de l'innovation. Ce parcours vous permettra de maîtriser les outils
                essentiels et d'accélérer votre réussite dans un monde en constante évolution. Préparez-vous à explorer
                des horizons numériques inédits !
            </p>
            <br><br>
        </div>
    </div>
    <!-- 
<div>
    <div>
     <img class="img-fluid rounded-pill" src="assets/img/IA.png" alt="">
    </div>
   <div>


   </div>

</div> -->

    <div id="suj" class="container">
        <h3 class="card-header border-0 ">Sujets de dicussion</h3>
    </div>
    <br>
    <div class="container">
        <div class="d-flex justify-content-end">
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Rechercher des sujets...">
                <button type="submit" class="btn btn-success"><i class="bi bi-search"></i></button>
            </form>
        </div>

    </div>
    <br>




    <?php
     while($question = $getAllQuestions->fetch()){
        ?>
    <div class="mt-5 container card mb-3 border-0 shadow animate" style="max-width: 80%;">
        <a href="article.php?id=<?=$question['id'];?>">
            <h5 class="card-header border-0 my-2 pl-1">
                <?= $question['titre'] ?>
            </h5>
        </a>
        <p class="card-body">
            <?= str_replace('<br />','',$question['description']);
                $question['description'] ?>
        </p>
        <div class=" border-0 p-1 container card-footer d-md-flex justify-content-between align-items-center">
            <p class=""><button class="btn" type="button"> <i id='like' class="bi bi-hand-thumbs-up"></i></button>
                <button class="btn" type="button"> <i class="bi bi-hand-thumbs-down"></i></button>
                <button class="btn" type="button"> <i class="bi bi-star"></i></button>
            </p>
            <p class="text-end">Publié par :
                <a href="profile.php?id=<?=$question['id_autheur']?>"> <?=($question['pseudo_auteur'])?> </a>
                le <small class="text-body-secondary">
                    <?= ($question['date_publication']) ?></small>
            </p>
        </div>
    </div>
    <br>
    <?php
     }
  ?>

    <?php include 'includes/footer.php';?>


</body>

</html>