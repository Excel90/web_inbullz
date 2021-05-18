<?php

require_once "database.php";
if($_SESSION['user'] == null){
    header("Location: login.php");
}

$sql = "SELECT * FROM user WHERE nrp = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['user']]);

$data = $stmt->fetch();

if($data['submit'] == 1){
        echo "<script>alert('Anda telah mengikuti Kuis')</script>";
        header("Location: Inbullz.php");
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src="js/app.js"></script>
    <title>Document</title>
</head>
<body>
    <p>Timer : <span id="timer"></span></p>
    <form>
        <!-- no 1 -->
        <label for="no1">1. Otak dari sebuah komputer…?</label><br>
        <input type="radio" name="no1" value="a">a. Processor<br>
        <input type="radio" name="no1" value="b">b. Power Supply<br>
        <input type="radio" name="no1" value="c">c. CPU<br>
        <input type="radio" name="no1" value="d">d. Motherboard<br>
        <br>

<!-- no 2 -->
        <label for="no2">2. Fungsi untuk membersihkan layar console…?</label><br>
        <input type="radio" name="no2" value="a">a. Crlsjr<br>
        <input type="radio" name="no2" value="b">b. Clrscr<br>
        <input type="radio" name="no2" value="c">c. Crlscr<br>
        <input type="radio" name="no2" value="d">d. Clrscrn<br>
        <br>

 <!-- no 3-->
        <label for="no3">3. Fungsi yang mengubah string menjadi angka…?</label><br>
        <input type="radio" name="no3" value="a">a. Stoi<br>
        <input type="radio" name="no3" value="b">b. Stoa<br>
        <input type="radio" name="no3" value="c">c. Ktoa<br>
        <input type="radio" name="no3" value="d">d. Stof<br>
        <br>       


 <!-- no 4-->
        <label for="no4">4. Header yang berfungsi untuk membaca file…?</label><br>
        <input type="radio" name="no4" value="a">a. #include<span>&#60;</span>stream><br>
        <input type="radio" name="no4" value="b">b. #include<span>&#60;</span>ifstream><br>
        <input type="radio" name="no4" value="c">c. #include<span>&#60;</span>ofstream><br>
        <input type="radio" name="no4" value="d">d. #include<span>&#60;</span>fstream><br>
        <br>       

<!-- no 5 -->
        <label for="no5">5. Cara untuk menampilkan konfigurasi IP…?</label><br>
        <input type="radio" name="no5" value="a">a. ispconfig<br>
        <input type="radio" name="no5" value="b">b. displayDNS<br>
        <input type="radio" name="no5" value="c">c. displayall<br>
        <input type="radio" name="no5" value="d">d. ipconfig<br>
        <br>

<!-- no 6 -->
        <label for="no6">6. Terdiri dari Apache, php dan perl…?</label><br>
        <input type="radio" name="no6" value="a">a. phpMyAdmin<br>
        <input type="radio" name="no6" value="b">b. Apache HTTP Server<br>
        <input type="radio" name="no6" value="c">c. WampServer<br>
        <input type="radio" name="no6" value="d">d. XAMPP<br>
        <br>

 <!-- no 7-->
        <label for="no7">7. Yang bukan NoSQL…?</label><br>
        <input type="radio" name="no7" value="a">a. MongoDB<br>
        <input type="radio" name="no7" value="b">b. OracleDB<br>
        <input type="radio" name="no7" value="c">c. Cassandra<br>
        <input type="radio" name="no7" value="d">d. Risk<br>
        <br>       


 <!-- no 8-->
        <label for="no8">8. Yang merupakan layanan dari komputasi awan…?</label><br>
        <input type="radio" name="no8" value="a">a. Platform as a Service<br>
        <input type="radio" name="no8" value="b">b. Quality of Service<br>
        <input type="radio" name="no8" value="c">c. Priority as a Service<br>
        <input type="radio" name="no8" value="d">d. Cloud as a Service<br>
        <br>       

<!-- no 9 -->
        <label for="no9">9. Berikut merupakan ciri-ciri dari cloud computing, kecuali…?</label><br>
        <input type="radio" name="no9" value="a">a. Resource Pooling<br>
        <input type="radio" name="no9" value="b">b. Measured Service<br>
        <input type="radio" name="no9" value="c">c. Authentication<br>
        <input type="radio" name="no9" value="d">d. Broad Network Access<br>
        <br>

<!-- no 10 -->
        <label for="no10">10. Syntax yang benar saat melakukan print pada PHP…? </label><br>
        <input type="radio" name="no10" value="a">a. Echo “Informates”; <br>
        <input type="radio" name="no10" value="b">b. Cout << “Informates”; <br>
        <input type="radio" name="no10" value="c">c. System.out.print("Informates");<br>
        <input type="radio" name="no10" value="d">d. Printf(“Informates”)<br>
        <br>

 <!-- no 11-->
        <label for="no11">11. Perbedaan Padding dan Margin..?</label><br>
        <input type="radio" name="no11" value="a">a. Margin membuat space di dalam border, sedangkan padding membuat space di luar border<br>
        <input type="radio" name="no11" value="b">b. Margin membuat space di luar border, sedangkan padding membuat space di dalam border.<br>
        <input type="radio" name="no11" value="c">c. Margin membuat border di luar space, sedangkan padding membuat border di dalam space.<br>
        <input type="radio" name="no11" value="d">d. Margin membuat border di dalam space, sedangkan padding membuat border di dalam space.<br>
        <br>       

        
 <!-- no 12-->
        <label for="no12">12. Yang bukan relasi suatu ERD…?</label><br>
        <input type="radio" name="no12" value="a">a. 1 to many<br>
        <input type="radio" name="no12" value="b">b. 1 to 1<br>
        <input type="radio" name="no12" value="c">c. 1 to 2<br>
        <input type="radio" name="no12" value="d">d. many to many<br>
        <br>       

        
<!-- no 13 -->
        <label for="no13">13. Hukum implikasi yang benar…?</label><br>
        <input type="radio" name="no13" value="a">a. T implikasi T, kesimpulan F<br>
        <input type="radio" name="no13" value="b">b. F implikasi T, kesimpulan F<br>
        <input type="radio" name="no13" value="c">c. T implikasi F, kesimpulan F<br>
        <input type="radio" name="no13" value="d">d. F implikasi F, kesimpulan T<br>
        <br>

 <!-- no 14-->
        <label for="no14">14. Game engine dari PES 2021, Valorant, PUBG, dan Fornite adalah…?</label><br>
        <input type="radio" name="no14" value="a">a. Unreal Engine<br>
        <input type="radio" name="no14" value="b">b. Unity<br>
        <input type="radio" name="no14" value="c">c. Source 2 Engine<br>
        <input type="radio" name="no14" value="d">d. IW Engine<br>
        <br>       

<!-- no 15 -->
        <label for="no15">15. Shortcut untuk me-minimize seluruh windows yang terbuka dan langsung ke dekstop…?</label><br>
        <input type="radio" name="no15" value="a">a. Win + Alt + M<br>
        <input type="radio" name="no15" value="b">b. Win + Shift + M<br>
        <input type="radio" name="no15" value="c">c. Win + Ctrl + M<br>
        <input type="radio" name="no15" value="d">d. Win + M<br>
        <br>

 <!-- no 16-->
        <label for="no16">16. Shortcut merunning program pada java (intelliJ) adalah…?</label><br>
        <input type="radio" name="no16" value="a">a. Shift + F10<br>
        <input type="radio" name="no16" value="b">b. Alt + Shift + F10<br>
        <input type="radio" name="no16" value="c">c. Ctrl + Shift + F10<br>
        <input type="radio" name="no16" value="d">d. Alt + F10<br>
        <br>       

<!-- no 17 -->
        <label for="no17">17. Command untuk mengenkripsi password pada router atau switch (Cisco) adalah…?</label><br>
        <input type="radio" name="no17" value="a">a. Password Encryption<br>
        <input type="radio" name="no17" value="b">b. Service - Encryption<br>
        <input type="radio" name="no17" value="c">c. Make Password Encryption<br>
        <input type="radio" name="no17" value="d">d. Service password-encryption<br>
        <br>

<!-- no 18 -->
        <label for="no18">18. Arti Error Code 408 pada website:</label><br>
        <input type="radio" name="no18" value="a">a. Request Timeout: koneksi internet lambat, server memutus koneksi dengan browser.<br>
        <input type="radio" name="no18" value="b">b. Not Found: halaman web yang dituju tidak ditemukan.<br>
        <input type="radio" name="no18" value="c">c. Forbidden: Tidak memiliki izin atau permission untuk mengakses sebuah website.<br>
        <input type="radio" name="no18" value="d">d. Bad Request: server tidak memahami request dari pengunjung website.<br>
        <br>

 <!-- no 19-->
        <label for="no19">19. Proses untuk mencari bug atau kesalahan logical sebuah program disebut…?</label><br>
        <input type="radio" name="no19" value="a">a. Compiling<br>
        <input type="radio" name="no19" value="b">b. Debugging<br>
        <input type="radio" name="no19" value="c">c. Destructor<br>
        <input type="radio" name="no19" value="d">d. Constructor<br>
        <br>       

<!-- no 20 -->
        <label for="no20">20. keyword java untuk membuat nilai suatu variabel konstan dan tidak dapat diubah lagi di kodingan selanjutnya adalah….?</label><br>
        <input type="radio" name="no20" value="a">a. final<br>
        <input type="radio" name="no20" value="b">b. last<br>
        <input type="radio" name="no20" value="c">c. static<br>
        <input type="radio" name="no20" value="d">d. constant<br>
        <br>

 <!-- no 21-->
        <label for="no21">21. Command dari pangkat:</label><br>
        <input type="radio" name="no21" value="a">a. Pow<br>
        <input type="radio" name="no21" value="b">b. Cout<br>
        <input type="radio" name="no21" value="c">c. Cin<br>
        <input type="radio" name="no21" value="d">d. Include<br>
        <br>       

<!-- no 22 -->
        <label for="no22">22. Pihak yang meminta layanan disebut?</label><br>
        <input type="radio" name="no22" value="a">a. Server<br>
        <input type="radio" name="no22" value="b">b. Komputer<br>
        <input type="radio" name="no22" value="c">c. Client<br>
        <input type="radio" name="no22" value="d">d. Bus<br>
        <br>

<!-- no 23 -->
        <label for="no23">23. peer to peer adalah ?</label><br>
        <input type="radio" name="no23" value="a">a. Yaitu jaringan komputer dimana setiap host dapat menjadi server dan jugamenjadi client secara bersamaan.<br>
        <input type="radio" name="no23" value="b">b. jaringan komputer dengan komputer yang didedikasikan khusus sebagai server.<br>
        <input type="radio" name="no23" value="c">c. sebuah sistem yang terdiri atas komputer dan perangkat jaringan lainnya yang bekerja bersama-sama untuk mencapai suatu tujuan yang sama<br>
        <input type="radio" name="no23" value="d">d. Merupakan perpaduan beberapa jaringan terpusat sehingga terdapat beberapa komputer server yang saling berhubungan dengan klient membentuk sistem jaringan tertentu.<br>
        <br>

 <!-- no 24-->
        <label for="no24">24. pengertian Jaringan Nirkabel (Wireless Network)?</label><br>
        <input type="radio" name="no24" value="a">a. menghubungkan satu komputer dengan komputer lain<br>
        <input type="radio" name="no24" value="b">b. Merupakan jaringan dengan medium berupa gelombang elektromagnetik<br>
        <input type="radio" name="no24" value="c">c. jaringan yang mencakup satu kota besar beserta daerah setempat.<br>
        <input type="radio" name="no24" value="d">d. Yaitu jaringan komputer dimana setiap host dapat menjadi server dan jugamenjadi client secara bersamaan.<br>
        <br>       

<!-- no 25 -->
        <label for="no25">25. bilangan octal adalah?</label><br>
        <input type="radio" name="no25" value="a">a. berbasis 9<br>
        <input type="radio" name="no25" value="b">b. berbasis 10<br>
        <input type="radio" name="no25" value="c">c. berbasis 16<br>
        <input type="radio" name="no25" value="d">d. berbasis 8<br>
        <br>

 <!-- no 26-->
        <label for="no26">26. 2324  = </label><br>
        <input type="radio" name="no26" value="a">a. 100100010101<br>
        <input type="radio" name="no26" value="b">b. 100100010111<br>
        <input type="radio" name="no26" value="c">c. 100100010100<br>
        <input type="radio" name="no26" value="d">d. 100100011100<br>
        <br>       


<!-- no 27 -->
        <label for="no27">27. 1200 = </label><br>
        <input type="radio" name="no27" value="a">a. 10010110000<br>
        <input type="radio" name="no27" value="b">b. 10010111000<br>
        <input type="radio" name="no27" value="c">c. 10010111100<br>
        <input type="radio" name="no27" value="d">d. 10011110000<br>
        <br>

<!-- no 28 -->
        <label for="no28">28. 1110101001100 = </label><br>
        <input type="radio" name="no28" value="a">a. 7501<br>
        <input type="radio" name="no28" value="b">b. 7500<br>
        <input type="radio" name="no28" value="c">c. 7502<br>
        <input type="radio" name="no28" value="d">d. 7508<br>
        <br>

 <!-- no 29-->
        <label for="no29">29. 11110100  = </label><br>
        <input type="radio" name="no29" value="a">a. 244<br>
        <input type="radio" name="no29" value="b">b. 234<br>
        <input type="radio" name="no29" value="c">c. 245<br>
        <input type="radio" name="no29" value="d">d. 224<br>
        <br>       

<!-- no 30 -->
        <label for="no30">30. 10000111000  = </label><br>
        <input type="radio" name="no30" value="a">a. 1200<br>
        <input type="radio" name="no30" value="b">b. 1800<br>
        <input type="radio" name="no30" value="c">c. 1080<br>
        <input type="radio" name="no30" value="d">d. 1020<br>
        <br>

 <!-- no 31-->
        <label for="no31">31. Structured Query Language adalah bahasa pemrograman untuk…</label><br>
        <input type="radio" name="no31" value="a">a. Web<br>
        <input type="radio" name="no31" value="b">b. Basis data<br>
        <input type="radio" name="no31" value="c">c. Sistem operasi<br>
        <input type="radio" name="no31" value="d">d. Routing<br>
        <br>       

<!-- no 32 -->
        <label for="no32">32. Operator perbandingan yang digunakan untuk mencari nilai tidak sama adalah…?</label><br>
        <input type="radio" name="no32" value="a">a. >=<br>
        <input type="radio" name="no32" value="b">b. <=<br>
        <input type="radio" name="no32" value="c">c. !=<br>
        <input type="radio" name="no32" value="d">d. ==<br>
        <br>

<!-- no 33 -->
        <label for="no33">33. Berikut ini yang merupakan perintah output adalah...?</label><br>
        <input type="radio" name="no33" value="a">a. Print<br>
        <input type="radio" name="no33" value="b">b. Switch<br>
        <input type="radio" name="no33" value="c">c. Case<br>
        <input type="radio" name="no33" value="d">d. Get <br>
        <br>

 <!-- no 34-->
        <label for="no34">34. Alasan kenapa perlu membuat program berorientasi objek adalah?</label><br>
        <input type="radio" name="no34" value="a">a. Mempercepat proses pembuatan program<br>
        <input type="radio" name="no34" value="b">b. Memudahkan pembuatan program dengan menggunakan program yang telah ada dan mengembangangkannya (Reusability dan Extensibility)<br>
        <input type="radio" name="no34" value="c">c. Memudahkan penulisan dan pemeliharaan program<br>
        <input type="radio" name="no34" value="d">d. Semua jawaban diatas benar<br>
        <br>       

<!-- no 35 -->
        <label for="no35">35. Ada berapa lapisan yang terdapat pada OSI layer ?</label><br>
        <input type="radio" name="no35" value="a">a. 5<br>
        <input type="radio" name="no35" value="b">b. 6<br>
        <input type="radio" name="no35" value="c">c. 7<br>
        <input type="radio" name="no35" value="d">d. 8<br>
        <br>

 <!-- no 36-->
        <label for="no36">36. Berikut adalah perintah untuk menampilkan seluruh kolom di dalam tabel mahasiswa?</label><br>
        <input type="radio" name="no36" value="a">a. SELECT ALL FROM mahasiswa<br>
        <input type="radio" name="no36" value="b">b. SELECT mahasiswa<br>
        <input type="radio" name="no36" value="c">c. SELECT * FROM mahasiswa<br>
        <input type="radio" name="no36" value="d">d. SELECT % FROM mahasiswa<br>
        <br>       

<!-- no 37 -->
        <label for="no37">37. Perintah SQL yang digunakan untuk memberikan hak akses atau izin pada user di database adalah…?</label><br>
        <input type="radio" name="no37" value="a">a. GRANT<br>
        <input type="radio" name="no37" value="b">b. REVOKE<br>
        <input type="radio" name="no37" value="c">c. DISTINCT<br>
        <input type="radio" name="no37" value="d">d. AUTO_INCREMENT<br>
        <br>

<!-- no 38 -->
        <label for="no38">38. Dari program diatas perintah untuk <conio.h> adalah...?</label><br>
        <input type="radio" name="no38" value="a">a. cout dan cin<br>
        <input type="radio" name="no38" value="b">b. clrscr dan cin<br>
        <input type="radio" name="no38" value="c">c. clrscr dan getch<br>
        <input type="radio" name="no38" value="d">d. cout dan getch<br>
        <br>

 <!-- no 39-->
        <label for="no39">39. Setiap variabel di PHP diawali dengan simbol?</label><br>
        <input type="radio" name="no39" value="a">a. #<br>
        <input type="radio" name="no39" value="b">b. $<br>
        <input type="radio" name="no39" value="c">c. %<br>
        <input type="radio" name="no39" value="d">d. *<br>
        <br>       

<!-- no 40 -->
        <label for="no40">40. Kode PHP diawali dan diakhiri dengan tanda?</label><br>
        <input type="radio" name="no40" value="a">a. <span>&#60;</span>?php … <span>&#60;</span> /?php><br>
        <input type="radio" name="no40" value="b">b. <span>&#60;</span>script> … <span>&#60;</span> /script><br>
        <input type="radio" name="no40" value="c">c. <span>&#60;</span>?php … ?><br>
        <input type="radio" name="no40" value="d">d. <span>&#60;</span>php … /?><br>
        <br>

 <!-- no 41-->
        <label for="no41">41. Apa yang harus dilakukan jika dikirimkan link mencurigakan?</label><br>
        <input type="radio" name="no41" value="a">a. Buka link nya<br>
        <input type="radio" name="no41" value="b">b. Hiraukan<br>
        <input type="radio" name="no41" value="c">c. Sebarkan <br>
        <input type="radio" name="no41" value="d">d. Simpan<br>
        <br>       

<!-- no 42 -->
        <label for="no42">42. Jika ada yang meminta kode OTP apa yang sebaiknya dilakukan?</label><br>
        <input type="radio" name="no42" value="a">a. Menolak<br>
        <input type="radio" name="no42" value="b">b. Beritahu kode nya<br>
        <input type="radio" name="no42" value="c">c. Screenshot lalu kirim<br>
        <input type="radio" name="no42" value="d">d. Screenshot lalu sebar<br>
        <br>

<!-- no 43 -->
        <label for="no43">43. Apa yang harus dilakukan jika ada kegiatan mencurigakan di akun bank?</label><br>
        <input type="radio" name="no43" value="a">a. Berikan kode OTP<br>
        <input type="radio" name="no43" value="b">b. Panik<br>
        <input type="radio" name="no43" value="c">c. Hubungi customer service official<br>
        <input type="radio" name="no43" value="d">d. Jungkir Balik<br>
        <br>

 <!-- no 44-->
        <label for="no44">44. Apa yang terjadi jika kode OTP diberikan?</label><br>
        <input type="radio" name="no44" value="a">a. Dapat hadiah<br>
        <input type="radio" name="no44" value="b">b. Akun dapat di hack<br>
        <input type="radio" name="no44" value="c">c. Dapat bantuan<br>
        <input type="radio" name="no44" value="d">d. Dapat keamanan<br>
        <br>       

<!-- no 45 -->
        <label for="no45">45. Langkah pertama jika ada kegiatan mencurigakan di bank adalah:</label><br>
        <input type="radio" name="no45" value="a">a. Panik<br>
        <input type="radio" name="no45" value="b">b. Berikan kode OTP<br>
        <input type="radio" name="no45" value="c">c. Tetap tenang dan hubungi pihak bank official<br>
        <input type="radio" name="no45" value="d">d. Telepon pacar<br>
        <br>

        <!-- no 46-->
        <label for="no46">46. Jika ada telepon menang hadiah dan diminta kode OTP apa yang harus dilakukan?</label><br>
        <input type="radio" name="no46" value="a">a. Berikan kode<br>
        <input type="radio" name="no46" value="b">b. Sebarkan <br>
        <input type="radio" name="no46" value="c">c. Hiraukan<br>
        <input type="radio" name="no46" value="d">d. Bayar<br>
        <br> 

<!-- no 47 -->
        <label for="no47">47. Kenapa kode OTP sangat penting untuk dirahasiakan?</label><br>
        <input type="radio" name="no47" value="a">a. Merupakan password pengaman<br>
        <input type="radio" name="no47" value="b">b. Bisa dapat uang<br>
        <input type="radio" name="no47" value="c">c. Bisa dapat hadiah<br>
        <input type="radio" name="no47" value="d">d. Tidak Berguna<br>
        <br>


<!-- no 48 -->
        <label for="no48">48. Jika ada anggota keluarga yang minta kode OTP apa yang harus dilakukan?</label><br>
        <input type="radio" name="no48" value="a">a. Berikan<br>
        <input type="radio" name="no48" value="b">b. Tanya kenapa<br>
        <input type="radio" name="no48" value="c">c. Menolak<br>
        <input type="radio" name="no48" value="d">d. Pilih beberapa anggota keluarga saja yang penting tidak semua<br>
        <br>


<!-- no 49 -->
        <label for="no49">49. Apa yang terjadi jika akun bank kita di hack?</label><br>
        <input type="radio" name="no49" value="a">a. Uang bertambah<br>
        <input type="radio" name="no49" value="b">b. Uang dapat hilang<br>
        <input type="radio" name="no49" value="c">c. Dapat undian<br>
        <input type="radio" name="no49" value="d">d. Uang dapat dibakar<br>
        <br>


<!-- no 50 -->
        <label for="no50">50. Berapa lama akun WA tidak bisa diakses jika kena hack?</label><br>
        <input type="radio" name="no50" value="a">a. 48 jam<br>
        <input type="radio" name="no50" value="b">b. 50 jam<br>
        <input type="radio" name="no50" value="c">c. 24 jam<br>
        <input type="radio" name="no50" value="d">d. 1 lustrum<br>
        <br>
        
    </form>

    <button onclick="Submit()">Submit</button>
    <script>
// Set the date we're counting down to
var countDownDate = new Date().getTime() + 7*60000 + 2*1000;


// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer").innerHTML = 
   minutes + ":" + seconds ;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    submit();
  }
}, 1000);
</script>
</body>
</html>