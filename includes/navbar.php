<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container-fluid">
       <h1 class="mb-1 "> <a href="index.php#" class="ml-lg-5 navbar-brand">
            <img src="assets/img/logo.png" alt="r.." style="width: 40px; height: auto;">
            ForumCode
        </a></h1>
        <button data-bs-target="#menu" data-bs-toggle="collapse" class="navbar-toggler border-0">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menu" class="collapse navbar-collapse">

            <ul class="navbar-nav ">
                <li class="nav-item mx-2"><a class="nav-link" href="index.php">
                        <i class="bi bi-house-door-fill"></i>
                        Acceuil</a></li>

                <?php
         if(isset($_SESSION['auth'])){
           ?>
           
                <li class="nav-item  mx-2"><a class="nav-link" href="publish-question.php">Publier un sujet</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item mx-2"><a class="nav-link" href="profile.php?id=<?=$_SESSION['id']?>">
                        <i class="bi bi-person-circle"></i>
                        Profil</a></li>
                <li class="nav-item mx-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="settingsDropdown"
                        style="transform: translateX(10%);">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="my-questions.php">Settings</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="actions/users/logoutaction.php">
                                <i class="bi bi-box-arrow-right"></i>
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- <li class="nav-item mx-2"><a class="nav-link" href="my-questions.php"><i class="bi bi-gear-fill"></i></a></li> -->

            </ul>

            <?php
         }else{
            ?>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2"><a class="nav-link" href="signup.php">S'inscrire</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="login.php">Se connecter</a></li>
            </ul>
            <?php
         }
        ?>
        </div>
    </div>

</nav>