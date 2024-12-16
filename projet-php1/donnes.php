<?php

$titre_du_site = "(Re)découverte HTML et CSS";





//$pages=[];//ou $pages = array()

$pages = [
    [ "id" => 1, "titre" => "Titre de la page 1", "contenu" => "contenu de la page 1"],
    ["id" => 2,"titre" => "Titre de la page 2", "contenu" => "contenu de la page 2"],
    ["id" => 3,"titre" => "Infos Patiques", "contenu" => "N'essayez pas de me joindre"]
];

// Exemple pour afficher e contenu de la 2emepage:
//echo $pages[1]["contenu"];

function obtenir_page_selon_id($id_a_chercher) {
    global $pages;
    foreach ($pages as $la_page) {
        if ($la_page["id"] == $id_a_chercher)
        {
            return ($la_page);
        }
    }
    return ($pages[0]);
}

//Mise en place des données pour l'affichage de la page demandée

//La page à afficher sera celle dont l'identifiant a été renseigné 
//dans l' URL en parametre.
if(isset($_GET["id"]))  // isset verifie si un id existe ou est paramétré
{
    $id_page_a_afficher = $_GET["id"];
}
else 
{
    $id_page_a_afficher = 1;
}

$page_a_afficher = obtenir_page_selon_id($id_page_a_afficher);



?>