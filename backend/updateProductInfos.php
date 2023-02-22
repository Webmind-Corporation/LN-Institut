<?php 
    session_start();
    $pdo = new PDO('sqlite:./data.db');

    $products = $pdo->query("SELECT * FROM PRODUCT");

    foreach ($products as $product) {
        if ($product[0] == $_POST["idSearchedProduct"]) {
            $id = $product[0];
            $title = $_POST["productInfoName"];
            $category = $_POST["productCategory"];
            $subCategory = $_POST["productSubCategory"];
            $productPrice = $_POST["productPrice"];


            $sql = "UPDATE product SET name=:title WHERE id=:id";
            $statement = $pdo->prepare($sql);
            $statement->execute([$title, $id]);

            $sql = "UPDATE product SET category=:category WHERE id=:id";
            $statement = $pdo->prepare($sql);
            $statement->execute([$category, $id]);

            $sql = "UPDATE product SET subCategory=:subCategory WHERE id=:id";
            $statement = $pdo->prepare($sql);
            $statement->execute([$subCategory, $id]);

            $sql = "UPDATE product SET price=:productPrice WHERE id=:id";
            $statement = $pdo->prepare($sql);
            $statement->execute([$productPrice, $id]);
        }
    }
    header("Location: ./panel.php");

?>