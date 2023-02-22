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
        <!-- <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'nonce-2726c7f26c' 'nonce-67re7dad5l'; child-src 'none'; connect-src https://region1.google-analytics.com/ ; frame-src https://www.google.com/ https://assets.calendly.com/ https://calendly.com/;"> -->

        <link rel='shortcut icon' href='./src/assets/Logo_LN_gros.png'>
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <link rel="stylesheet" href="./src/styles/load.css">
        <link rel='stylesheet' href='./src/styles/default.css'>
        <link rel='stylesheet' href='./src/styles/index.css'>
        <link rel='stylesheet' href='./src/styles/responsive.css'>
    </head>
    <body>
        <div class="topNav">
            <ul class="listMenu">
                <li class="menu"><a href="#redirect1" class="redirect">Tarifs</a></li>
                <li class="menu"><a href="#contact" class="redirect">Contact</a></li>
            </ul>
        </div>
        <header>
            <h2 id="ln">LN</h2>
            <p id="sousTitle">Beauté</p>
            <p id="sousTitle1">&</p>
            <p id="sousTitle2">Bien - être</p>
        </header>
        <section id="separation">
            <h3 class="heroTitle">Laissez nous prendre soin de vous</h1>
            <p class="heroDesc">Hélène pense que votre bien-être mérite le meilleur.</p>
            <a href="#redirect1" id="cta">Voir nos offres</a>
        </section>
        <div id="info">
            <h2 id="titleInfo">Information</h2>
            <div class="containerInfo">
                <div id="containerCategory">
                    <div class="categoryContainer">
                        <h3>Horaires :</h3>
                        <div id="horaire">
                            <p>Du Lundi au Samedi</p>
                            <p>De 9h30 à 18h30</p>
                            <p id="location">10 rue Didier Daurat 31140 Fonbeauzard</p>
                        </div>
                    </div>
                    <div class="categoryContainer">
                        <h3>Boutique :</h3>
                        <div id="shop">
                            <button>Vente de produits</button>
                            <button id="buttonGift">Carte cadeau</button>
                        </div>
                    </div>
                    <div class="button">
                        <button class="book" id="redirect1">Prendre rendez-vous</button>
                    </div>
                </div>
                <div id="map"></div>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.310850001462!2d1.4311845154117255!3d43.68330055850189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aea46d84fe7c3f%3A0x4f2da1bb6eda942!2s10%20Rue%20Didier%20Daurat%2C%2031140%20Fonbeauzard!5e0!3m2!1sfr!2sfr!4v1675566694995!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="map"></iframe> -->
                <script async
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ9iVXlvcUUSvv1CVu8166KhUMjzRK7Nc&callback=initMap">
                </script>
            </div>
        </div>
        <div id="wrapGift" class="hide">
            <h2 class="titleSectionGift">Carte cadeau</h2>
            <div class="contentSectionGift">
                <div class="gift">
                    <p>Offrez un moment de détente et de bien-être à vos proches.</p>
                    <div class="montant">
                        <div id="nameGift">
                            <p>Pour</p>
                            <input type="text" id="name" name="name" placeholder="Nom Prénom" autocomplete="off" required>
                        </div>
                        <div id="amount">
                            <input type="number" id="amount" name="amont" placeholder="10.00" value="10.00" autocomplete="off" min="1" required>
                            <p>€</p>
                        </div>
                    </div>
                    <div id="paypal-button-container"></div>
                    <!-- <script src="https://www.paypal.com/sdk/js?client-id=AVH5Th6lwVZEu1K-xWMVNTk0770HaB3RS-V6uO60fikwYB9fTQNgGwd7AwO_tlCfbs_gSIM5RNFFOcGX&currency=EUR"></script> -->
                    <script src="https://www.paypal.com/sdk/js?client-id=AVH5Th6lwVZEu1K-xWMVNTk0770HaB3RS-V6uO60fikwYB9fTQNgGwd7AwO_tlCfbs_gSIM5RNFFOcGX&currency=EUR"></script>
                    <p class="conditions">La carte cadeau est valable 6 mois à partir de la date d'achat. Elle est utilisable sur tous les soins et produits de l'institut. Elle est personnalisable avec un montant personnalisé.</p>
                </div>
            </div>
            <div id="close">X</div>
        </div>
        <div id="tarif">
            <h2 id="titleTarif">Tarif</h2>
            <div class="containerCategory">
                <div class="img left">
                    <img id="byotea" src="./src/assets/byotea.png" alt='Produits "Byotea Skin Care"'>
                </div>
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
                <div class="img right">
                    <img id="sopolish" src="./src/assets/sopolish.png" alt='Produits "sopolish" de Pronails'>
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
            <h2 id="titleContact">Contact</h2>
            <div class="container">
                <div class="reseaux">
                    <div id="facebook">
                        <a href="https://www.facebook.com/LN-Institut-162260040637184/" target="_blank"></a>
                        <p>LN Institut</p>
                    </div>
                    <div id="insta">
                        <a href="https://www.instagram.com/ln_institut/" target="_blank"></a>
                        <p>LN Institut</p>
                    </div>
                </div>
                <p class="sep">................</p>
                <div class="autres">
                    <a href="tel:+33620325652" id="num">Appeler</a>
                    <button class="book">Prendre rendez-vous</button>
                </div>
            </div>
        </div>
        <div id="smart-button-container">
            <div style="text-align: center;">
            <div id="paypal-button-container"></div>
            </div>
        </div>
        <footer>
            <div id="copiryght">
                <a href="https://baverdie-dev.fr" target="_blank">Made by baverdie in 2023</a>
                <p> - </p>
                <div id="panel">
                    <p> Copyright © 2023 Ln Institut, Inc. </p>
                </div>
                <p> - </p>
                <a href="./pages/politique.html">Politique de confidentialité</a>
            </div>
        </footer>
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
        <script src='./src/js/data.js'></script>
        <script src='./src/js/app.js'></script>
        <script src='./src/js/paypal.js'></script>
    </body>
<html>