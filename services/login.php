    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


<?php
    require_once "../database.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user=$_POST['nrp'];
    $pass=$_POST['password'];
    $imap=false;
    // $timeout=30;
    // $fp = fsockopen ($host='john.petra.ac.id',$port=110,$errno,$errstr,$timeout);
    // $errstr = fgets ($fp);
    // if (substr ($errstr,0,1) == '+'){
    //     fputs ($fp,"USER ".$user."\n");
    //     $errstr = fgets ($fp);
    //     if (substr ($errstr,0,1) == '+'){
    //         fputs ($fp,"PASS ".$pass."\n");
    //         $errstr = fgets ($fp);
    //         if (substr ($errstr,0,1) == '+'){
    //             $imap=true;
    //         }
    //     }
    // }

    if ($user == 'dummy' && $pass == 'test') {
        $imap = true;
    }
    if ($imap == true){
        $_SESSION['username'] = $user;
        header("Location: ../index.php" );
    }
    else {
        header("Location: ../login.php?error=1" );
    }
}


?>
