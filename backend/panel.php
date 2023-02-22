<?php 
    $pdo = new PDO('sqlite:./data.db');

    $gifts = $pdo->query("SELECT * FROM PAYMENT");
    $products = $pdo->query("SELECT * FROM PRODUCT");

    if (!empty($_POST)) {
        foreach ($products as $product) {
            if ($product[1] == $_POST["title"]) {
                $searchedProduct = $product;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>LN admin</title>
        <!-- <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'nonce-2726c7f26c' 'nonce-67re7dad5l'; child-src 'none'; connect-src https://region1.google-analytics.com/ ; frame-src https://www.google.com/ https://assets.calendly.com/ https://calendly.com/;"> -->

        <link rel='shortcut icon' href='../src/assets/Logo_LN_gros.png'>
        <link rel="stylesheet" href="../src/styles/panel.css">
        <link rel='stylesheet' href='../src/styles/default.css'>
        <link rel='stylesheet' href='../src/styles/responsive.css'>
    </head>
    <body>
        <div class="topNavPanel">
            <ul class="listMenu">
                <li class="menu"><a href="../index.php" class="redirect">Acceuille</a></li>
            </ul>
        </div>
        <div class="header">
            <div class="header_logo">
                <img src="../src/assets/Logo_LN_gros.png" alt="logo LN">
            </div>
            <div class="header_title">
                <h1>LN Institut Beauté & Bien-être</h1>
            </div>
        </div>
        <section>
            <div id="navPanel">
                <ul>
                    <li><a href="#panelGift">Modifier mes offres</a></li>
                    <li><a href="#panelPayment">Cartes cadeaux</a></li>
                </ul>
            </div>
            <div>
                <h2 class="formTitle">Changer mes offres</h2>
                <form method="post" class="selectProduct">
                    <input type="text" name="title" placeholder="title" autocomplete="off">
                    <button>Chercher</button>
                </form>
                <?php if (!empty($_POST) && isset($products)) { ?>
                    <form id="productInfos" action="../backend/updateProductInfos.php" method="post">
                        <fieldset id="subProductInfos">
                            <legend><input type="text" name="productInfoName" class="productInfoName" value="<?php echo $searchedProduct[1] ?>"></legend>
                            <div class="info">
                                <label for="productCategory">Catégorie</label>
                                <input type="text" id="productCategory" name="productCategory" value="<?php echo $searchedProduct[2] ?>">
                            </div>
                            <div class="info">
                                <label for="productSubCategory">Sous-Catégorie</label>
                                <textarea id="productSubCategory" name="productSubCategory"><?php echo $searchedProduct[3] ?></textarea>
                            </div>
                            <div class="info">
                                <label for="productPrice">Prix</label>
                                <textarea id="productPrice" name="productPrice"><?php echo $searchedProduct[4] ?></textarea>
                            </div>
                        </fieldset>
                        <input type="number" id="idSearchedProduct" name="idSearchedProduct" value="<?php echo $searchedProduct[0] ?>" class="hidden">
                        <button id="updateInfos">update infos</button>
                    </form>
                    <button type="button" id="rmProduct">Supprimer</button>
                <?php } ?>
            </div>
            <div id="panelGift">
                <?php foreach ($gifts as $gift ) { ?>
                    <div id="infoGift">
                        <p><?php echo $gift[1] ?></p>
                        <p><?php echo $gift[2] ?></p>
                        <p><?php echo $gift[3] ?></p>
                        <p><?php echo $gift[4] ?></p>
                    </div>
                <?php } ?>
            </div>
        </section>
    </body>
</html>