<?php
session_start();
if(isset($_SESSION["email"])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../assets/css/bootstrap.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />

        <title>AJOUTER UN FILM</title>
    </head>

    <body>
        <header>
        <?php
            require_once "menu.php";
        ?>
        </header> 

        <span class="mt-3 d-flex justify-content-end">
                <form method="post">
                    <button id="btn-deconnexion" name="btn-deconnexion" class="btn btn-danger">DECONNEXION</button>
                </form>
        </span>


            <div class="container-fluid">

                <span class="mt-5">
                    <h3 class="mt-5 text-success text-center" > 
                         Prenez un siège, <?= $_SESSION['email'] ?> 
                    </h3></br></br></br></br>
                </span>


                <div class="container">
                    <form action="traitementajout.php" id="form-login" method="POST" enctype="multipart/form-data">
                        <div class="text-center">
                            <img src="../img/logo.jpg" alt="logo quelfilm" title="quelfilm.com">
                        </div>

                        <div class="mb-5">
                            <label for="nom_film" class="form-label">Nom du film</label>
                            <input type="text" class="form-control" id="nom_film" name="nom_film" required>
                        </div>

                        <div class="mb-5">
                            <label for="realisateur_film" class="form-label">Réalisateur</label>
                            <text class="form-control" id="realisateur_film" name="realisateur_film" required></text>
                        </div>

                        <div class="mb-5">
                            <label for="studio_film" class="form-label">Studios</label>
                            <text class="form-control" rows="5" id="studio_film" name="studio_film" required></text>
                        </div>

                        <div class="mb-5">
                            <label for="genre_film" class="form-label">Genre</label>
                            <text class="form-control" rows="5" id="genre_film" name="genre_film" required></text>
                        </div>

                        <div class="mb-5">
                            <label for="annee_film" class="form-label">Année de sortie</label>
                            <text class="form-control" rows="5" id="annee_film" name="annee_film" required></text>
                        </div>

                        <div class="mb-5">
                            <label for="pays_film" class="form-label">Pays</label>
                            <text class="form-control" rows="5" id="pays_film" name="pays_film" required></text>
                        </div>

                        <div class="mb-5">
                            <label for="resume_film" class="form-label">Résumé</label>
                            <textarea class="form-control" rows="5" id="resume_film" name="resume_film" required></textarea>
                        </div>

                        <div class="mb-5">
                            <label for="recommandation_film" class="form-label">Recommandation</label>
                            <select class="form-control" name="recommandation_film" id="recommandation_film" required>
                                <option value="0">OUI</option>
                                <option value="1">NON</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="affiche_film" class="form-label">Affiche du film</label>
                                <input type="file" class="form-control" id="affiche_film" name="affiche_film" required>
                        </div>

                        <div class="d-flex justify-content-around">
                            <button type="submit" name="btn-connexion" class="btn btn-info">Ajouter</button>
                            <a href="films2.php" class="btn btn-secondary">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
    </body>
    </html>

    <?php
        function deconnexion(){
            var_dump("au revoir");
                echo "bonsoir";
                    session_unset();
                    session_destroy();
                header('Location: ../index.php');
        }
    
        if(isset($_POST['btn-sortir'])){
            deconnexion();
        }

}else{
    echo "<a href='' class='btn btn=info'>s'inscrire</a>";
}

