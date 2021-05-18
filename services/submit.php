<?php

require_once "../database.php";
session_start();
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']=="POST"){
    $no = array();
    $no[0] = $_POST['no1'];
    $no[1] = $_POST['no2'];
    $no[2] = $_POST['no3'];
    $no[3] = $_POST['no4'];
    $no[4] = $_POST['no5'];
    $no[5] = $_POST['no6'];
    $no[6] = $_POST['no7'];
    $no[7] = $_POST['no8'];
    $no[8] = $_POST['no9'];
    $no[9] = $_POST['no10'];
    $no[10] = $_POST['no11'];
    $no[11] = $_POST['no12'];
    $no[12] = $_POST['no13'];
    $no[13] = $_POST['no14'];
    $no[14] = $_POST['no15'];
    $no[15] = $_POST['no16'];
    $no[16] = $_POST['no17'];
    $no[17] = $_POST['no18'];
    $no[18] = $_POST['no19'];
    $no[19] = $_POST['no20'];
    $no[20] = $_POST['no21'];
    $no[21] = $_POST['no22'];
    $no[22] = $_POST['no23'];
    $no[23] = $_POST['no24'];
    $no[24] = $_POST['no25'];
    $no[25] = $_POST['no26'];
    $no[26] = $_POST['no27'];
    $no[27] = $_POST['no28'];
    $no[28] = $_POST['no29'];
    $no[29] = $_POST['no30'];
    $no[30] = $_POST['no31'];
    $no[31] = $_POST['no32'];
    $no[32] = $_POST['no33'];
    $no[33] = $_POST['no34'];
    $no[34] = $_POST['no35'];
    $no[35] = $_POST['no36'];
    $no[36] = $_POST['no37'];
    $no[37] = $_POST['no38'];
    $no[38] = $_POST['no39'];
    $no[39] = $_POST['no40'];
    $no[40] = $_POST['no41'];
    $no[41] = $_POST['no42'];
    $no[42] = $_POST['no43'];
    $no[43] = $_POST['no44'];
    $no[44] = $_POST['no45'];
    $no[45] = $_POST['no46'];
    $no[46] = $_POST['no47'];
    $no[47] = $_POST['no48'];
    $no[48] = $_POST['no49'];
    $no[49] = $_POST['no50'];

            $nrp = $_SESSION['user'];
$kj = array();
            $kj[0] = 'c';
$kj[1] = 'b';
$kj[2] = 'a';
$kj[3] = 'd';
$kj[4] = 'd';
$kj[5] = 'd';
$kj[6] = 'b';
$kj[7] = 'a';
$kj[8] = 'c';
$kj[9] = 'a';
$kj[10] = 'b';
$kj[11] = 'c';
$kj[12] = 'c';
$kj[13] = 'a';
$kj[14] = 'd';
$kj[15] = 'c';
$kj[16] = 'd';
$kj[17] = 'a';
$kj[18] = 'b';
$kj[19] = 'a';
$kj[20] = 'b';
$kj[21] = 'c';
$kj[22] = 'a';
$kj[23] = 'd';
$kj[24] = 'c';
$kj[25] = 'c';
$kj[26] = 'a';
$kj[27] = 'c';
$kj[28] = 'b';
$kj[29] = 'a';
$kj[30] = 'a';
$kj[31] = 'c';
$kj[32] = 'a';
$kj[33] = 'b';
$kj[34] = 'e';
$kj[35] = 'd';
$kj[36] = 'a';
$kj[37] = 'b';
$kj[38] = 'a';
$kj[39] = 'c';
$kj[40] = 'b';
$kj[41] = 'a';
$kj[42] = 'c';
$kj[43] = 'b';
$kj[44] = 'c';
$kj[45] = 'c';
$kj[46] = 'a';
$kj[47] = 'c';
$kj[48] = 'b';
$kj[49] = 'c';

$score = 0;
for($i = 0;$i<50;$i++){
    if($kj[$i] == $no[$i]){
        $score++;
    }
}

$sql = "UPDATE `user` SET `score`=?,`submit`=1 WHERE `nrp`=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$score,$nrp]);

$res = array(
    'status'=>1,
    'error'=> ''

);

echo json_encode($res);         
}

?>