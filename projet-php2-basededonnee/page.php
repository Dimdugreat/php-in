<?php
require("donnes.php");
?>




<!DOCTYPE html>

<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre_du_site."-".$page_a_afficher["titre"]; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <header>

        <h1><?php echo $titre_du_site;?></h1>
        <!-- ne change pas selon lapafe mais pourrait etre intersssant aà adminstirer -->
    

        <nav>

            <ul>
                <!-- <li>
                    <a class="actuel" href="#">Accueil</a>
                </li>

                <li><a href="projets.html">Projets</a></li>
                <li><a href="ressources.html">Ressources</a></li> -->
                <!-- il faut pour chaque page  du site
                 - générer un élément de liste contenant un lien sous la forme: 
                
                    <li><a href="???">????</a></li>
                - que le lien prenne la classe"actuel"
                    -->
                <?php  foreach ($pages as $la_page) {
                        if ($la_page["id"] == $id_page_a_afficher)
                        {
                            $ajout_classe = "class='actuel'";
                        }
                        else
                            $ajout_classe =  "";
                    echo "<li><a $ajout_classe href='page.php?id=".$la_page["id"]."'>" .$la_page["titre"]. "</a></li>";
                }?>
            </ul>
        </nav>
    </header>

    <main>

        <section>

            <div class="centrage">
                <h2><?php echo $page_a_afficher["titre"]?></h2>
                [Contenu de la page]
            </div>

        </section>

    



    </main>

    <footer><!-- balise sémantique - pied de page -->

            <p>Ceci est un pied de page</p>
              <!-- ne change pas selon lapafe mais pourrait etre intersssant aà adminstirer -->
    

    </footer>

</body>

</html>