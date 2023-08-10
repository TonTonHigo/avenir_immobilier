<?php include "connexion.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avenir Immobilier</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- mon css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "header.php"; ?>
    <!-- burger -->
    <i class="fa-solid fa-bars fa-2xl" style="color: #000000;" id="burger" data-bs-toggle="modal" data-bs-target="#modalburger"></i>

    <!-- Modal -->
    <div class="modal fade" id="modalburger" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
            <div id="menumodal">  
                <nav>
                    <ul>
                        <li><h2><a href="index.php" class="lienscol liensmodal">Nos offres immobilières</a></h2></li>
                        <li><h2><a href="#contactform" class="lienscol liensmodal" id="contact">Nous contacter</a></h2></li>
                        <li>
                            <form action="controller.php" method="post">
                            <input type="hidden" value="search" name="controller">
                            <input type="research" placeholder="Ma recherche..." name="research" id="inputcol">
                            <button type="submit" id="butsearch" class="liensmodal">Rechercher</button>
                            </form>
                        </li>
                    </ul> 
                </nav>
            </div>
        </div>
        </div>
    </div>
    </div>
    <main>
        <!-- barre filtres -->
        <div>
            <h1 id="cent">Filtres</h1>
            <form action="" id="filtre">
                <input list="type_immo" name="type" id="type" placeholder="Type d'habitation" >
                <datalist id="type_immo">
                    <option value="appartement">
                    <option value="cabane">
                    <option value="villa">
                    <option value="maison">
                </datalist>

                <input list="surface_immo" name="surface" id="surface" placeholder="Surface">
                <datalist id="surface_immo">
                    <option value="petite à grande">
                    <option value="grande à petite">
                </datalist>

                <input list="prix_immo" name="prix" id="prix" placeholder="Prix">
                <datalist id="prix_immo">
                    <option value="croissant">
                    <option value="decroissant">
                </datalist>

                <button type="submit" id="ajoutfiltre">Filtrer</button>
            </form>
        </div>

        <!-- cartes -->
        <div id="grid" class="original">
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>


        <!-- cartes type -->
        <div  class="cache grid appartement">
            <?php
            $carte = $connexion -> select_type("appartement");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid maison">
            <?php
            $carte = $connexion -> select_type("maison");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid villa">
            <?php
            $carte = $connexion -> select_type("villa");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid cabane">
            <?php
            $carte = $connexion -> select_type("cabane");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>


        <!-- cartes type surface -->
        <div  class="cache grid villa-surfacecrois">
            <?php
            $carte = $connexion -> select_type_surfacecrois("villa");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid maison-surfacecrois">
            <?php
            $carte = $connexion -> select_type_surfacecrois("maison");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid cabane-surfacecrois">
            <?php
            $carte = $connexion -> select_type_surfacecrois("cabane");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid appartement-surfacecrois">
            <?php
            $carte = $connexion -> select_type_surfacecrois("appartement");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid villa-surfacedes">
            <?php
            $carte = $connexion -> select_type_surfacedes("villa");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid maison-surfacedes">
            <?php
            $carte = $connexion -> select_type_surfacedes("maison");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid cabane-surfacedes">
            <?php
            $carte = $connexion -> select_type_surfacedes("cabane");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid appartement-surfacedes">
            <?php
            $carte = $connexion -> select_type_surfacedes("appartement");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>


        <!-- cartes type prix -->
        <div  class="cache grid villa-prixcrois">
            <?php
            $carte = $connexion -> select_type_prixcrois("villa");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid maison-prixcrois">
            <?php
            $carte = $connexion -> select_type_prixcrois("maison");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid cabane-prixcrois">
            <?php
            $carte = $connexion -> select_type_prixcrois("cabane");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid appartement-prixcrois">
            <?php
            $carte = $connexion -> select_type_prixcrois("appartement");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid appartement-prixdes">
            <?php
            $carte = $connexion -> select_type_prixdes("appartement");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid maison-prixdes">
            <?php
            $carte = $connexion -> select_type_prixdes("maison");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid villa-prixdes">
            <?php
            $carte = $connexion -> select_type_prixdes("villa");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid cabane-prixdes">
            <?php
            $carte = $connexion -> select_type_prixdes("cabane");
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>


        <!-- juste surface -->
        <div  class="cache grid surfacecrois">
            <?php
            $carte = $connexion -> select_surfacecrois();
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid surfacedes">
            <?php
            $carte = $connexion -> select_surfacedes();
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>

        <!-- surface prix -->
        <div  class="cache grid surfacecrois-prixcrois">
            <?php
            $carte = $connexion -> select_surfacecrois_prixcrois();
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid surfacecrois-prixdes">
            <?php
            $carte = $connexion -> select_surfacecrois_prixdes();
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid surfacedes-prixdes">
            <?php
            $carte = $connexion -> select_surfacedes_prixdes();
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid surfacedes-prixcrois">
            <?php
            $carte = $connexion -> select_surfacedes_prixcrois();
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>



        <!-- juste prix -->
        <div  class="cache grid prixcrois">
            <?php
            $carte = $connexion -> select_prixcrois();
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        <div  class="cache grid prixdes">
            <?php
            $carte = $connexion -> select_prixdes();
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
                        <a href="#" class="btn">Contacter le vendeur</a>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        

        <!-- ajout flache ici pour remonter tout en haut -->
          <div>
            <a href="#" id="icon"><i class="fa-solid fa-circle-arrow-up fa-3x" style="color: #000000;"></i></i></a>
          </div>  
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