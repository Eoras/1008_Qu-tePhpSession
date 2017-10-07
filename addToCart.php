<?php

if (isset($_POST["addToCart"])){

    switch ($_POST["addToCart"])
    {

        case "46":
            if (!isset($_COOKIE["panier"]["pecanNuts"])){
                setCookie("panier[pecanNuts]", '1', strtotime("+5 days"));
            } else {
                $panier = $_COOKIE["panier"];
                $panier["pecanNuts"]++;
                setCookie("panier[pecanNuts]",$panier["pecanNuts"], strtotime("+5 days"));
            }
            header ("Location: index.php");
            break;

        case "36":
            if (!isset($_COOKIE["panier"]["ChocolateChips"])){
                setCookie("panier[ChocolateChips]", '1', strtotime("+5 days"));
            } else {
                $panier = $_COOKIE["panier"];
                $panier["ChocolateChips"]++;
                setCookie("panier[ChocolateChips]", $panier["ChocolateChips"], strtotime("+5 days"));
            }
            header ("Location: index.php");
            break;

        case "58":
            if (!isset($_COOKIE["panier"]["ChocolateCookie"])) {
                setCookie("panier[ChocolateCookie]", '1', strtotime("+5 days"));
            } else {
                $panier = $_COOKIE["panier"];
                $panier["ChocolateCookie"]++;
                setCookie("panier[ChocolateCookie]",$panier["ChocolateCookie"]);
            }
            header ("Location: index.php");
            break;

        case "32":
            if (!isset($_COOKIE["panier"]["MmsCookies"])) {
                setCookie("panier[MmsCookies]", '1', strtotime("+5 days"));
            } else {
                $panier = $_COOKIE["panier"];
                $panier["MmsCookies"]++;
                setCookie("panier[MmsCookies]", $panier["MmsCookies"]);
            }
            header ("Location: index.php");
            break;
    }
}

header ("Location: index.php");
