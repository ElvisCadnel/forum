<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForumDev</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.cdnfonts.com/css/baloo-thambi" rel="stylesheet">
    <script src="assets/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    body {
        background-color: #f6f6f6;
        font-family: 'Poppins', sans-serif !important;
    }

    h1 {
        font-family: 'Baloo Thambi';
    }

    .card-profile {
        text-align: center;
        position: relative;
        padding: 2rem;
    }

    .profile-icon {
        font-size: 5rem;
        color: #007bff;
        cursor: pointer;
        border-radius: 50%;
        border: 2px solid #007bff;
        display: block;
        margin: 0 auto;
        width: 150px;
        height: 150px;
        overflow: hidden;
        line-height: 120px;
        display: flex;
        justify-content: center;
        background-size: cover;
        background-position: center;
    }





    @media screen and (max-width: 768px) {

        #taille>div>#s>img {
            height: 300px;
        }
    }

    .navbar-toggler-icon {
        transition: transform 0.3s ease;
    }

    .navbar-toggler.collapsed .navbar-toggler-icon {
        transform: rotate(0deg);
    }

    .navbar-toggler:not(.collapsed) .navbar-toggler-icon {
        transform: rotate(90deg);
    }

    #haut {
        height: auto;
        padding: 2rem 0rem;
    }

    @media screen and (max-width: 500px) {
        #haut>.right-part>video {
            width: 370px;
        }
    }

    .video-background {
        position: absolute;
        background-size: cover;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Pour que la vidéo couvre tout l'espace */
        z-index: -1;
        /* Place la vidéo en arrière-plan */
        border-radius: 5rem;
    }

    .content {
        position: relative;
        z-index: 1;
        /* Place le texte au-dessus de la vidéo */
        color: white;
        text-align: center;
        padding: 20px;
        height: 100vh;
        /* Hauteur de la vue */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #backs {

        margin: 0px auto;
        height: 90vh;
        width: 90%;
    }

    /* Initial state: elements are off-screen */
    .animate {
        opacity: 0;
        transform: translateY(100px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .animate-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Style du bouton de like par défaut */
    .like-btn {
        color: #000;
        /* Couleur par défaut de l'icône */
    }

    /* Style du bouton de like lorsqu'il est activé */
    .liked {
        color: #ff0000;
        /* Couleur rouge pour indiquer un like */
    }
    </style>

    <script>
    /* Final state: elements are in their proper position */

    document.addEventListener('scroll', function() {
        const elements = document.querySelectorAll('.animate');
        const scrollPosition = window.scrollY + window.innerHeight;

        elements.forEach(element => {
            if (scrollPosition > element.offsetTop + 100) {
                element.classList.add('animate-visible');
            }
        });
    });

    likeButton.addEventListener('click', function() {
        // Bascule entre l'état "liked" et non-liké
        likeButton.classList.toggle('liked');

        // Changez l'icône en fonction de l'état
        let icon = likeButton.querySelector('i');
        if (likeButton.classList.contains('liked')) {
            icon.classList.remove('bi-star');
            icon.classList.add('bi-star-fill'); // Icône remplie pour indiquer un like
        } else {
            icon.classList.remove('bi-star-fill');
            icon.classList.add('bi-star'); // Retour à l'icône par défaut
        }
    });
    let variables = document.querySelectorAll('.haut'); // Utilisez le sélecteur de classe approprié
    let varecherche = document.querySelectorAll('.reche'); // Utilisez le sélecteur de classe approprié

    varecherche.forEach(function(btn) { // Ajoutez un événement pour chaque bouton dans la NodeList
        btn.addEventListener('click', function() {
            variables.forEach(function(variable) { // Cacher tous les éléments sélectionnés par .haut
                variable.style.display = 'none';
            });
        });
    });
    </script>

</head>