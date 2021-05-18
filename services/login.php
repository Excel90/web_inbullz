<?php
    require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $username = $_POST['nrp'];

    function isExist($username, $pdo){
        $sql = "SELECT * FROM user WHERE nrp = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);

        if($stmt->rowcount()>=1){
            return true;

        }
        else {
            return false;
        }
    }

    function addUser($username, $pdo){
        $sql = "INSERT INTO `user`(`nrp`) VALUES (?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
    }

    if (!isExist($username,$pdo)){
        addUser($username,$pdo);
        exit();
    }
    $_SESSION['user'] = $username;
    header("Location: ../quiz.php");
}
?>