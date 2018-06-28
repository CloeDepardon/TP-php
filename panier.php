<?php
session_start();
require_once('templates/header.html');
require_once('templates/nav.html');

if (!isset($_SESSION['panier'])) {
    // Nouveau panier
    $_SESSION['panier'] = array();
    // Division
    $_SESSION['panier']['id_produit'] = array();
    $_SESSION['panier']['quantite'] = array();
    $_SESSION['panier']['prix'] = array();
}

// Ajout articles
function ajoutProduit ($select) {
    $_SESSION['panier']['id_produit'] = $select['id']; 
    $_SESSION['panier']['quantite'] = $select['quantite'];
    $_SESSION['panier']['prix'] = $select['prix']; 
}

$select = array();
$select['id'] = "ref1234";
$select['quantite'] = 2;
$select['prix'] = 12;
ajoutProduit ($select);
?>

<section class="container">
    <h1>Articles présents dans votre panier</h1>
    <table class="table panier">
        <thead>
            <tr>
                <th scope="col">Référence</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_SESSION['panier']['id_produit']?></td>
                <td><?php echo $_SESSION['panier']['quantite']?></td>
                <td><?php echo $_SESSION['panier']['prix']?></td>
            </tr>
        </tbody>
    </table>
</section>

