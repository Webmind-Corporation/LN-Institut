<?php 
    session_start();
    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    $pdo = new PDO('sqlite:../data.db');
    $payments = $pdo->query("SELECT * FROM PAYMENT");

    if (!empty($_POST)) {
        $status = "FAILURE";
        $author = $_POST["author"];
        $amount = $_POST["amountPaypal"];
        $date = date("d.m.y  - G:i:s");
        $sql = "INSERT INTO payment (status, author, amount, date) VALUES (:status, :author, :amount, :date)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$status, $author, $amount, $date]);
    }
    header("Location: ../../index.php");
?>