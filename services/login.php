<?php
    require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    function isExist($username, $pdo){
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);

        if($stmt->rowcount()>=1){
            return true;

        }
        else {
            return false;
        }
    }
    if (!isExist($username,$pdo)){
        exit();
    }
    $_SESSION['user'] = $username;
    header("Location: ../Inbullz.php");
}
?>