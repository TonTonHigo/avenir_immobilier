<?php include "connexion.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avenir Immobilier</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- mon css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "header.php"; ?>

    <main>

        <div id="grid">
            <?php
            $carte = $connexion -> select("*","biens_immo");
            foreach($carte as $affiche){
                echo'
                <div class="card" style="width: 18rem;">
                    <img src="'. $affiche['image'] .'" class="card-img-top" alt="'. $affiche['type'] .'">
                    <div class="card-body">
                        <h5 class="card-title">'. $affiche['type'] .'</h5>
                        <p class="card-text">'. $affiche['surface'] .' m²</p>
                        <p class="card-text">'. $affiche['prix'] .' €</p>
                        <p class="card-text">'. $affiche['contenu'] .'</p>
                        <p class="card-text">'. $affiche['vendeur'] .'</p>
                        <a href="#" class="btn btn-primary">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>

        <!-- ajout flache ici pour remonter tout en haut -->

    </main>
    
    <?php include "footer.php"; ?>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- mon js -->
<script src="script.js"></script>
</body>
</html>