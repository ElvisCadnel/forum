document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.querySelector('.file-input'); // Sélecteur pour le champ de fichier
    const profilePic = document.getElementById('profilePic'); // Sélecteur pour l'élément d'image de profil

    // Fonction pour mettre à jour la photo de profil
    function updateProfilePic(event) {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                // Mettre à jour l'arrière-plan de l'élément profilePic avec la photo téléchargée
                profilePic.style.backgroundImage = `url(${e.target.result})`;
                profilePic.style.backgroundSize = 'cover'; // Assurez-vous que l'image couvre bien l'élément
                profilePic.style.backgroundPosition = 'center'; // Centrer l'image
                profilePic.style.backgroundRepeat = 'no-repeat'; // Ne pas répéter l'image

                // Effacer l'icône une fois l'image chargée
                profilePic.innerHTML = ''; // Supprime le contenu de l'élément profilePic (l'icône)
            };

            reader.readAsDataURL(file); // Lire le fichier comme une URL de données
        }
    }

    // Attacher la fonction au changement du champ de fichier
    fileInput.addEventListener('change', updateProfilePic);
});


       
