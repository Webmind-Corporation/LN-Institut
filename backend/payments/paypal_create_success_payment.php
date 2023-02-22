<?php 
    session_start();
    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    $pdo = new PDO('sqlite:../data.db');
    $payments = $pdo->query("SELECT * FROM PAYMENT");

    if (!empty($_POST)) {
        $status = "SUCCESS";
        $author = $_POST["author"];
        $name = $_POST["nameGift"];
        $amount = $_POST["amountPaypal"];
        $date = date("d.m.y  - G:i:s");
        $mdp = password_hash(substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"), -5), PASSWORD_BCRYPT);
        $sql = "INSERT INTO payment (status, author, amount, date, name, mdp) VALUES (:status, :author, :amount, :date, :name, :mdp)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$status, $author, $amount, $date, $name, $mdp]);
    }
    header("Location: ../../index.php");
?>