<?php

if (empty($_SESSION['logged'])) {
    header("Location: login.php");
}