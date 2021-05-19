<?php

require_once "database.php";
if(!isset($_SESSION['username']))
{
  header("Location: login.php");
  exit();
}

$sql = "SELECT * FROM user WHERE nrp = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['username']]);

$data = $stmt->fetch();

if($data['submit'] == 1){
        echo "<script>alert('Anda telah mengikuti Kuis')</script>";
        header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>SOP QUIZZ</title>
</head>
<body>
<h2>KETENTUAN MENGIKUTI QUIZ INFORMATICS BULLETIN</h2>

Peserta wajib login ke website mading online menggunakan akun petra.<br>
Peserta wajib mengisi pre-test dan post-test yang telah disediakan. Apabila peserta tidak mengisi pre-test dan post-test tersebut, maka akan mempengaruhi akumulasi poin yang telah dikumpulkan.<br>
Apabila ada kendala saat mengisi kuis dan/atau memiliki pertanyaan, bisa bertanya melalui cp line : felicialaksana<br><br>

<h3>PERATURAN PERMAINAN</h3>
Permainan ini hanya bisa dimainkan 1x.
Permainan ini adalah menjawab quiz yang diberikan sebanyak mungkin dengan jawaban benar. <br>
Waktu yang diberikan untuk mengerjakan quiz ini adalah 7 menit.<br>
Jika waktu yang diberikan telah habis, maka jawaban akan langsung tersimpan dan permainan selesai.<br>
Apabila di tengah permainan peserta melakukan 'refresh', maka permainan akan kembali dari awal.<br>
Dipersilahkan untuk mengerjakan dengan jawaban sendiri. Jangan curang ya mengerjakannya, tidak boleh tanya teman, internet, pacar, doi *eh.<br>
Jangan lupa berdoa, semoga kalian lah pemenang dari kuis berhadiah ini :)<br>

<h2>=== GOOD LUCK INFORMATES!! ===</h2>

<button><a href="quiz.php">Mulai</a></button>

</body>
</html>