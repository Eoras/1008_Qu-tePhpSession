<?php require 'inc/head.php';
require 'inc/connected.php';    // Bien connecté?

/**
 * Si le panier est vide on affiche: Vide
 * Si le panier est pas vide, on calcule:
 * 1) Le nombre d'artiles différents $diffCookies (pas obligatoire)
 * 2) Bouclage sur $_COOKIE['panier'] pour calculer le total $totalPanier
 */
if (!empty($_COOKIE["panier"])) {
    $diffCookies  =  count($_COOKIE['panier']);
    $panier = $_COOKIE['panier'];
    $totalPanier = 0;
    foreach ($_COOKIE["panier"] as $name => $value) {
        $totalPanier += $value;
    }
}
?>

<section class="cookies container-fluid">

    <div class="panel panel-default center-block" style="width: 650px">
        <div class="panel-body" style="position: relative;">
            <table>

                <?php if (empty($_COOKIE["panier"])) : ?>
                <tr>
                    <td><h3>Votre panier est vide<h3></td>
                    <td>
                        <a href="index.php" class="btn btn-default btn-bottom-right" title="Aller dans la boutique">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            Go to Shop
                        </a>
                    </td>
                </tr>


                <?php else: ?>

                <thead>
                <tr>
                    <th style="width: 500px">Nom de l'article</th>
                    <th style="width: 50px">Quantité</th>
                </tr>
                </thead>
                <tbody>
                    <?php if (!empty($_COOKIE["panier"]["pecanNuts"])) : ?>
                    <tr>
                        <td><h2>Pecan Nuts</h2>
                            <p>Cooked by Penny !</p></td>
                        <td><h2><?= $_COOKIE["panier"]["pecanNuts"] ?></h2></td>
                    </tr>
                    <?php endif; ?>
                    <?php if (!empty($_COOKIE["panier"]["ChocolateChips"])) : ?>
                        <tr>
                            <td><h2>Chocolate chips</h2>
                                <p>Cooked by Bernadette !</p></td>
                            <td><h2><?= $_COOKIE["panier"]["ChocolateChips"] ?></h2></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($_COOKIE["panier"]["ChocolateCookie"])) : ?>
                        <tr>
                            <td><h2>Chocolate cookie</h2>
                                <p>Cooked by Bernadette !</p></td>
                            <td><h2><?= $_COOKIE["panier"]["ChocolateCookie"] ?></h2></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($_COOKIE["panier"]["MmsCookies"])) : ?>
                        <tr>
                            <td><h2>M&M's© cookies</h2>
                                <p>Cooked by Penny !</p></td>
                            <td><h2><?= $_COOKIE["panier"]["MmsCookies"] ?></h2></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($_COOKIE["panier"])) : ?>
                        <tr>
                            <td><h2 class="text-right">TOTAL: &nbsp;&nbsp;</h2 ></td>
                            <td><h2><?= $totalPanier ?? '0' ?></h2></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($_COOKIE["panier"])) : ?>
                        <tr>
                            <td><hr/></td>
                            <td><hr/></td>
                        </tr>
                        <tr>
                            <td><p><i>Vous avez <?= $diffCookies ?> article<?= $diffCookies <= 1 ? '' : "s différents"?> dans votre panier.</i></p></td>
                            <td>
                                <a href="viderpanier.php" class="btn btn-default" title="Supprimer les cookies">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    Clear Cart
                                </a>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

               <?php endif; ?>
            </table>
        </div>
    </div>

</section>
<?php require 'inc/foot.php'; ?>
