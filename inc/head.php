<?php
session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
    <title>The Cookie Factory</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/styles.css"/>
<body>
<header>
    <!-- MENU ENTETE -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
                    <h1>The Cookies Factory</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (empty($_SESSION['logged'])) : ?>
                        <li>
                            <a href="logout.php" class="btn btn-default" title="Se déconnecter">
                                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                                Log-in
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (!empty($_SESSION['logged'])) : ?>
                        <li>
                        <a href="index.php" class="btn btn-default " title="Go Home">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                            Shop
                        </a>
                        </li>
                        <li>
                            &nbsp;
                            &nbsp;
                        </li>
                        <li>
                            <a href="logout.php" class="btn btn-default" title="Se déconnecter">
                                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                Log-out
                            </a>
                        </li>
                        <li>
                            &nbsp;
                            &nbsp;
                        </li>
                    <li>
                        <a href="/cart.php" class="btn btn-warning navbar-btn">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            Cart
                                <?php
                                if (!empty($_COOKIE["panier"])) {
                                    $totalPanier = 0;
                                    foreach ($_COOKIE["panier"] as $name => $value) {
                                        $totalPanier += $value;
                                    }
                                    echo "<span class='badge'> $totalPanier </span>";
                                }
                                ?>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid text-right">
        <strong>Hello <?= $_SESSION['logged'] ?? "Wilder" ?> !</strong>
    </div>
</header>
