<?php 
    $pdo = new PDO('sqlite:./backend/data.db');

    $products = $pdo->query("SELECT * FROM PRODUCT");




?>

<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>LN institut</title>
        <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'nonce-2726c7f26c' 'nonce-67re7dad5l'; child-src 'none'; connect-src https://region1.google-analytics.com/; frame-src https://www.google.com/ ;">

        <link rel='shortcut icon' href='./src/assets/Logo_LN_gros.png'>
        <link rel="stylesheet" href="./src/styles/load.css">
        <link rel='stylesheet' href='./src/styles/default.css'>
        <link rel='stylesheet' href='./src/styles/index.css'>
        <link rel='stylesheet' href='./src/styles/responsive.css'>
    </head>
    <body>
        <div class="topNav">
            <ul class="listMenu">
                <li class="menu">Tarifs</li>
                <li class="menu">Contact</li>
            </ul>
        </div>
        <header>
            <h2 id="ln">LN</h2>
            <p id="sousTitle">Beauté</p>
            <p id="sousTitle1">&</p>
            <p id="sousTitle2">Bien - être</p>
        </header>
        <section id="contain">
            <div id="leftHeader">
                <h1 class="heroTitle">Laissez nous prendre soin de vous</h1>
                <p class="heroDesc">LN institut pense que votre bien être mérite le meilleur.</p>
                <button id="cta">Voir nos offres</button>
            </div>
            <div id="rightHeader"></div>
            <main>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.310850001462!2d1.4311845154117255!3d43.68330055850189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aea46d84fe7c3f%3A0x4f2da1bb6eda942!2s10%20Rue%20Didier%20Daurat%2C%2031140%20Fonbeauzard!5e0!3m2!1sfr!2sfr!4v1673149253875!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </main>
        </section>
        <img id="sopolish" src="./src/assets/sopolish.png" alt='Produits "sopolish" de Pronails'>
        <img id="byotea" src="./src/assets/byotea.png" alt='Produits "Byotea Skin Care"'>
        <div id="tarif">
            <h2 id="titleTarif">Tarif</h2>
            <div class="containerCategory">
                <h2 class="left">Épilation</h2>
                <div class="categoryContainer left">
                    <h2>Visage</h2>
                    <div class="productContainer">
                        <?php $products = $pdo->query("SELECT * FROM PRODUCT"); ?>
                        <?php
                            foreach ($products as $product) {
                                if ($product['category'] == 'epilation' && $product['subCategory'] == 'visage') { ?>
                                    <div class="contain"><p class="nameProduct"><?php echo $product['name'] ?></p><p class="price"><?php echo $product['price'] . "€" ?></p></div>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
                <div class="categoryContainer left">
                    <h2>Corps</h2>
                    <div class="productContainer">
                        <?php $products = $pdo->query("SELECT * FROM PRODUCT"); ?>
                        <?php
                            foreach ($products as $product) {
                                if ($product['category'] == 'epilation' && $product['subCategory'] == 'corps') { ?>
                                    <div class="contain"><p class="nameProduct"><?php echo $product['name'] ?></p><p class="price"><?php echo $product['price'] . "€" ?></p></div>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
                <div class="categoryContainer left">
                    <h2>Forfaits</h2>
                    <div class="productContainer">
                        <?php $products = $pdo->query("SELECT * FROM PRODUCT"); ?>
                        <?php
                            foreach ($products as $product) {
                                if ($product['category'] == 'epilation' && $product['subCategory'] == 'forfaits') { ?>
                                    <div class="contain"><p class="nameProduct"><?php echo $product['name'] ?></p><p class="price"><?php echo $product['price'] . "€" ?></p></div>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
                <h2 class="right">Beauté</h2>
                <div class="categoryContainer right">
                    <h2>Regard</h2>
                    <div class="productContainer">
                        <?php $products = $pdo->query("SELECT * FROM PRODUCT"); ?>
                        <?php
                            foreach ($products as $product) {
                                if ($product['category'] == 'beaute' && $product['subCategory'] == 'regard') { ?>
                                    <div class="contain"><p class="nameProduct"><?php echo $product['name'] ?></p><p class="price"><?php echo $product['price'] . "€" ?></p></div>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
                <div class="categoryContainer right">
                    <h2>Mains et Pieds</h2>
                    <div class="productContainer">
                        <?php $products = $pdo->query("SELECT * FROM PRODUCT"); ?>
                        <?php
                            foreach ($products as $product) {
                                if ($product['category'] == 'beaute' && $product['subCategory'] == 'mains et pieds') { ?>
                                    <div class="contain"><p class="nameProduct"><?php echo $product['name'] ?></p><p class="price"><?php echo $product['price'] . "€" ?></p></div>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
                <div class="categoryContainer right">
                    <h2>Vernis Semi-Permanent</h2>
                    <div class="productContainer">
                        <?php $products = $pdo->query("SELECT * FROM PRODUCT"); ?>
                        <?php
                            foreach ($products as $product) {
                                if ($product['category'] == 'beaute' && $product['subCategory'] == 'semi permanent') { ?>
                                    <div class="contain"><p class="nameProduct"><?php echo $product['name'] ?></p><p class="price"><?php echo $product['price'] . "€" ?></p></div>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
                <h2 class="left">Soins</h2>
                <div class="categoryContainer left">
                    <h2>Visage</h2>
                    <div class="productContainer">
                        <?php $products = $pdo->query("SELECT * FROM PRODUCT"); ?>
                        <?php
                            foreach ($products as $product) {
                                if ($product['category'] == 'soins' && $product['subCategory'] == 'visage') { ?>
                                    <div class="contain"><p class="nameProduct"><?php echo $product['name'] ?></p><p class="price"><?php echo $product['price'] . "€" ?></p></div>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
                <div class="categoryContainer left ">
                    <h2>Corps</h2>
                    <div class="productContainer">
                        <?php $products = $pdo->query("SELECT * FROM PRODUCT"); ?>
                        <?php
                            foreach ($products as $product) {
                                if ($product['category'] == 'soins' && $product['subCategory'] == 'corps') { ?>
                                    <div class="contain"><p class="nameProduct"><?php echo $product['name'] ?></p><p class="price"><?php echo $product['price'] . "€" ?></p></div>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact">
            <h2 id="titleContact">Contacter</h2>
            <div class="container">
                <div id="facebook">
                    <a href="https://www.facebook.com/LN-Institut-162260040637184/" target="_blank"></a>
                    <p>LN Institut</p>
                </div>
                <a href="tel:+33620325652" id="num">Appeler</a>
            </div>
        </div>
        <footer>
            <p>Made by baverdie in 2023</p>
        </footer>
        <script src='./src/js/data.js'></script>
        <script src='./src/js/app.js'></script>
    </body>
<html>