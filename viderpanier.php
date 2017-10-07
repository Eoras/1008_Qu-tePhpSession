<?php

if (isset($_COOKIE["panier"])) {
    foreach ($_COOKIE['panier'] as $name => $value) {
        setCookie("panier[$name]", "", -1);
    }
}

header("location: cart.php");