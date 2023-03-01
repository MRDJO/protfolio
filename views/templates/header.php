<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $desc ?? 'Mon nom est Djahoui Orphée , Ceci est mon portfolio' ?>">
    <meta name="keywords" content="<?= $kw ?? 'web, developpement, application' ?>">
    <meta name="author" content="Djahoui Orphée">
    <title class="TT"><?= $title ?? 'Portfolio' ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/material/css/materialdesignicons.min.css">
</head>
<body>
    <header class="index-header">
        <nav class="nav-header">
            <div class="logo">
                <h2 data-text="Djahoui"><a href="/" id="logoD">Dj</a></h2>
            </div>
            <div class="btn-deroulant">
                <i class="mdi mdi-menu" id="menu"></i>
            </div>
            <!-- mdi-xml compétence -->
            <ul class="ul-header">
                <li><a href="/"> <i class="mdi mdi-home"></i> Acceuil <span></span> </a></li>
                <li><a href="/realisations"> <i class="mdi mdi-playlist-edit "></i> Réalisations</a></li>
                <li><a href="/contact"> <i class="mdi mdi-phone-log"></i> Contact</a></li>
                <li id="li-theme">
                    <span class="theme">
                        <small>
                            <i>Thème</i>
                            <span class="mdi mdi-brightness-3" id="icon"></span>
                        </small>
                    </span>
                </li>
            </ul>
        </nav>
    </header>
        <div class="btn-scroll top">
        <span>
                <i class="mdi mdi-chevron-double-up"></i>
        </span>
        </div>
    <div class="container">

