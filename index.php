<?php
include_once "database.php";
if(!isset($_SESSION['username']))
{
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* modal */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fdfdfd00;
            margin: auto;
            /* padding: 20px; */
            border-radius: 2vw;
        }

        /* The Close Button */
        .close {
            color: #020202;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: rgb(216, 43, 43);
            text-decoration: none;
            cursor: pointer;
        }
    </style>


</head>

<body class="background-image" >
    <div>
        <div class="row">
            <div class="col-lg-12" style="padding: 0;">
                <img src="asset/bg_.jpg" style="
                        width: 100%;
                        height: 100%;
                        top: 0;
                        left: 0;
                        object-fit: cover;">
                </img>
                <div class="judul-mading">
                    <img src="asset/judul.png" alt="" class="hide">
                    <a class="judul-mading-hover">
                        <img src="asset/judul_hover.png" alt="">
                    </a>
                </div>
                <div class="butterfly ">
                    <img src="asset/kupu-kupu.png" alt="" class="hide">
                    <a class="butterfly-hover" 　type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#butterfly-content">
                        <img src="asset/kupu-kupu_hover.gif" style="width: 27vw;position: absolute;left: 15vw; top: 5vw;" alt="">
                    </a>
                </div>
                <div class="caterpillar">
                    <img src="asset/caterpillar.png" alt="" class="hide">
                    <a class="caterpillar-hover" href="notes.php">
                        <img src="asset/caterpillar_hover.gif" alt="">
                    </a>
                </div>
                <div class="cocoon">
                    <img src="asset/cocoon.png" alt="" class="hide">
                    <a class="cocoon-hover" href="card.php">
                        <img src="asset/cocoon_hover.gif" alt="">
                    </a>
                </div>
                <div class="gamepad">
                    <img src="asset/gamepad.png" alt="" class="hide">
                    <a class="gamepad-hover" href="sop.php">
                        <img src="asset/gamepad_hover.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="hide-div">
            <div class="row p-4">
                <div class="col-12 p-4 text-center bg-transparent">
                    <div class="judul-mading-mobile">
                        <img src="asset/judul.png" alt="" class="hide">
                        <a class="judul-mading-hover-mobile">
                            <img src="asset/judul_hover.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 p-4 text-center bg-transparent">
                    <div class="butterfly-mobile">
                        <img src="asset/kupu-kupu.png" alt="" class="hide">
                        <a class="butterfly-hover-mobile" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#butterfly-content">
                            <img src="asset/kupu-kupu_hover.gif" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 p-4 text-center bg-transparent">
                    <div class="caterpillar-mobile">
                        <img src="asset/caterpillar.png" alt="" class="hide">
                        <a class="caterpillar-hover-mobile" href="notes.php">
                            <img src="asset/caterpillar_hover.gif" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 p-4 text-center bg-transparent">
                    <div class="cocoon-mobile">
                        <img src="asset/cocoon.png" alt="" class="hide">
                        <a href="card.php" class="cocoon-hover-mobile">
                            <img src="asset/cocoon_hover.gif" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 p-4 text-center bg-transparent">
                    <div class="gamepad-mobile">
                        <img src="asset/gamepad.png" alt="" class="hide" style="padding-top: 6vh;">
                        <a href="sop.php" class="gamepad-hover-mobile">
                            <img src="asset/gamepad_hover.png" alt="" style="padding-top: 6vh;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 p-4 text-right bg-transparent">
            <h5>Inbullz<span>&trade;</span> 2020/2021</h5>
        </div>
    </div>
    <!-- Modal -->
    <div id="butterfly-content" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="owl-carousel owl-theme">
                        <div class="item5">
                            <div class="active artikel ">
                                <div class="row ">
                                    <div class="col-12">
                                        <center>
                                            <h1>Corona BARU B117 lebih berbahaya?</h1>
                                            <h3>Penulis: Marcella</h3>
                                        </center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            Hey guys, gimana kabar kalian? Aku harap kalian sehat-sehat ya. Tapi kalian udah tau belum sih sama varian baru dari Covid? Yup, B117 adalah varian baru yang sudah masuk di Indonesia. Menurut WHO, setidaknya sudah ada sekitar 60 negara yang terinfeksi varian ini. Peneliti pun mengatakan bahwa varian B117 memiliki tingkat reproduksi 1,35 kali lebih tinggi daripada varian virus corona normal. Apa sih perbedaan gejala dengan corona sebelumnya?
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-2"></div>
                                    <div class="col-8">
                                        <img src="asset/artikel1.png" class="gambar" width="100%">
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-12">
                                        <h3>1. Kelelahan dan lesu</h3>
                                        <h5>Kondisi kelelahan dapat dirasakan sebagai dampak dari zat sitokin, yaitu zat yang dihasilkan oleh sistem kekebalan tubuh sebagai bentuk reaksi melawan virus.</h5>
                                    </div>
                                    <div class="col-12">
                                        <h3>2. Nyeri otot</h3>
                                        <h5>Nyeri otot yang tidak biasa diduga dapat terjadi karena virus menyerang serat otot dan lapisan jaringan tubuh.</h5>
                                    </div>
                                    <div class="col-12">
                                        <h3>3. Sakit Kepala</h3>
                                        <h5>Dalam beberapa kasus, virus corona dapat menyebabkan seseorang mengalami sakit kepala. Namun, peneliti pun masih mencari tahu lebih lanjut apakah sakit kepala adalah penyebab dari B117 atau faktor lainnya.</h5>
                                    </div>
                                    <div class="col-12">
                                        <h3>4. Gejala lainnya</h3>
                                        <h5>Belakangan ini, beberapa peneliti menemukan gejala baru seperti diare, ruam kulit, kehilangan nafsu makan, dan kebingungan.
                                            Kendati begitu, peneliti masih memerlukan penelitian lebih lanjut soal gejala baru yang timbul akibat varian virus corona B117.
                                            Nah itu dia beberapa gejala dari mutasi B117. Peneliti masih terus melakukan penelitian. Walaupun virus ini ditemukan 50-70% lebih menular dari strain awal, efektivitas vaksin dan risiko komplikasi tetap sama. Semoga informasi ini bermanfaat yaa. Jangan lupa untuk selalu mematuhi protokol, stay safe guys!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- ARTIKEL 2 -->
                            <div class="artikel">
                                <div class="row ">
                                    <div class="col-12">
                                        <center>
                                            <h1>VIRAL! modus pencurian data yang sedang marak, sudah banyak korban!</h1>
                                        </center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            Nahh guyss, sekarang kita bahas tentang salah satu kejahatan yang berkaitan erat dengan kita para informaters. Kejahatan digital merupakan salah satu tindak kriminal yang memanfaatkan perkembangan teknologi. Bisa dibilang ini merupakan tindakan kriminal next level ya guyss. Walaupun lebih canggih, namun yang namanya kejahatan patut diwaspadai yaa…
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-2"></div>
                                    <div class="col-8">
                                        <img src="asset/artikel2_1.png" class="gambar" width="100%">
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-12">
                                        <h4>
                                            Salah satu trik pengambilan data pribadi secara sepihak (hacking) dengan maksud mencuri dan atau me-reset data pengguna adalah dengan meminta kode OTP. Apa itu kode OTP??? Kode OTP (One Time Password) sesuai dengan namanya yaitu salah satu kode verifikasi yang bersifat pribadi dan rahasia dengan sistem kerja seperti halnya password hanya saja dipakai sekali. Kode ini biasanya terdiri dari 6 digit karakter (angka unik) yang dikirimkan melalui sms atau email penggunanya. Kode OTP diberikan oleh beberapa aplikasi misalnya true-money, tokopedia, digipost, dan lain sebagainya kepada para pengguna yang akan login ke aplikasi tersebut melalui device yang berbeda.
                                        </h4>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12">
                                        <h3>Kenapa kode OTP tidak boleh dibagikan ke orang lain?</h3>
                                        <h5>Kode OTP ini merupakan perlindungan keamanan ekstra bagi pengguna dan jika diibaratkan sebagai rumah maka kode OTP ini adalah kuncinya dan aplikasi atau platform yang kita ingin login adalah rumah nya oleh karena itu, kode ini tidak boleh diberikan ke orang lain. Apalagi jika ada seseorang yang menghubungi dan mengaku sebagai pihak bank, Go-jek, maupun karyawan platform tersebut.</h5>
                                        <h5>
                                            Jika kode OTP ini diberikan, maka peretas akan mendapatkan akses ke akun kita dan bisa mengakibatkan kerugian bagi kita. Misalnya seperti yang sedang marak saat ini, banyak orang yang mengaku sebagai karyawan bank tertentu dan meminta kode OTP pengguna. Setelah kode tersebut diberikan maka penipu tersebut dapat membobol akun bank tersebut dan mengambil uangnya. Oleh karena itu, sangat penting untuk menjaga kerahasiaan kode OTP ini dan untuk tidak membagikannya ke orang lain.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="offset-2  col-8">
                                        <img src="asset/artikel2_2.png" class="gambar" width="100%">
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-12">
                                        <h5>
                                            Ada berbagai kejahatan digital yang beredar di masyarakat. Salah satu yang sangat berbahaya yaitu dengan modus meminta kode OTP tersebut. Melalui kode OTP, para pelaku bisa dengan mudah mengakses akun penggunanya tanpa disadari. Nahh yang menjadi salah satu poin krusial dari kesuksesan terjadinya kejahatan digital melalui kode OTP ini adalah ketika pengguna atau target pelaku dengan “rela hati” memberitahukan kode OTP tersebut. Cara yang biasanya dilakukan oleh pelaku untuk mendapatkan kode OTP yaitu dengan berpura-pura sebagai salah satu Customer Service atau karyawan dari aplikasi tersebut. Kemudian pelaku akan mengiming-imingi korban dengan hadiah uang atau pulsa yang hanya akan diberikan ketika korban mau mengirimi kode OTP yang ia miliki sebagai “kode verifikasi”. Apabila kode OTP tersebut diberikan, pelaku akan segera melakukan kejahatan pencurian data, atau misal yang diberikan adalah kode OTP aplikasi mobile banking, pelaku bisa melakukan transfer uang dari rekening korban secara sepihak. Hal ini dapat dilakukan ketika pelaku berhasil masuk ke akun mobile banking seseorang yang berbeda device dengan kode OTP yang diterima tersebut dapat login dengan mudah.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-12">
                                        <h3>Waspada modus penipuan kode OTP</h3>
                                        <h5>
                                            Akhir-akhir ini, penipuan melalui kode OTP kembali marak oleh karena itu kita akan membahas modus penipuannya agar teman-teman bisa lebih berhati-hati.
                                        </h5>
                                        <h3>1. Mengaku sebagai karyawan indomaret</h3>
                                        <h5>
                                            Penipu menggunakan akun WA hasil peretasan milik orang lain atau menelepon anggota grup WA indomaret untuk mengirimkan kode OTP yang masuk ke handphone korban dengan alasan ada orang yang ingin membeli voucher game namun karyawan tersebut salah memasukkan nomor telepon dan meminta untuk segera dikirimkan kode OTP nya karena pembeli sedang menunggu. Setelah kode OTP diberikan, WA korban akan diretas dan tidak dapat diakses hingga 24 jam ke depan. Lalu penipu tersebut akan menggunakan WA korban untuk meminta uang ke kontak yang ada di WA korban tersebut. Biasanya mereka meminta untuk di transfer sejumlah uang ke OVO.
                                        </h5>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-8">
                                        <img src="asset/artikel2_3.png" class="gambar" width="100%">
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-12 pt-2">
                                        <h3>2. Mengaku sebagai karyawan bank</h3>
                                        <h5>
                                            Penipu akan dengan sengaja melakukan booking berulang kali di platform tiket maupun hotel online seperti traveloka dengan data pribadi yang ada agar korban merasa panik.
                                        </h5>
                                        <h5>
                                            Lalu seseorang yang mengaku sebagai karyawan bank akan menelepon dan bilang kalau ada kegiatan mencurigakan di akun bank atau korban dan meminta kode OTP yang masuk ke hp korban untuk mengamankan akun bank korban.Dan biasanya, karena si korban ini sudah panik, maka dia akan langsung memberikan kode OTP yang diminta. Dibobolah akun si korban.
                                        </h5>
                                        <h3>3. Modus menang undian</h3>
                                        <h5>
                                            Seseorang yang mengaku sebagai karyawan bank akan menghubungi korban dan bilang kalau korban menang undian berhadiah dan bahkan bisa saja mentransfer sedikit atau sebagian dari nominal hadiah agar korban percaya. Misalnya, penipu akan mengirimkan pulsa 100.000 kepada korban yang ‘katanya’ menang undian pulsa 500.000 lalu meminta korban untuk mengirimkan kode OTP yang masuk ke aplikasi banking maupun SMS agar bisa mencairkan sisa hadiah. Setelah kode didapat, penipu akan segera menutup telepon dan mengambil uang dari rekening korban.
                                        </h5>
                                        <h3>4. Link</h3>
                                        <h5>
                                            Tidak hanya melalui WA atau SMS, penipu juga bisa mengirimkan link ke hp korban dan meminta korban untuk mengklik link tersebut atau link-link mencurigakan yang sengaja disebar dengan kedok akan mendapatkan hadiah atau tiket undian jika mengisi data diri atau mengklik link tersebut. Jika korban mengklik link tersebut, maka penipu dapat meretas data-data pribadi korban.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="text-center">
                                            Sudah sadar kan akan pentingnya menjaga kerahasiaan kode OTP? Ingat, jangan pernah membagikan kode OTP kepada siapapun atau mengklik link-link mencurigakan ya! Agar data-data pribadi dan harta kita bisa tetap aman.
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- ARTIKEL 3 -->
                            <div class="artikel ">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                            <h1>MEGATREN, Perkiraan Perkembangan Dunia Teknologi dan Industri hingga 5 tahun mendatang, kepoin yukkk</h1>
                                            <h3>Penulis: Maria</h3>
                                        </center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            Berdasarkan hasil pengamatan terhadap pemanfaatan teknologi di berbagai sektor industri, Huawei mengidentifikasi 10 megatrend yang berperan besar dalam kehidupan manusia. Yuk kita lihat!
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4>1. Robotika</h4>
                                    </div>
                                    <div class="col-4 isi">
                                        <img src="asset/artikel3_1.png" class="gambar" width="100%">
                                    </div>
                                    <div class="  0col-12">
                                        <h5>
                                            Kemajuan ilmu pengetahuan dan teknologi khususnya dibidang material, AI perseptual, hingga jaringan mampu membangun sebuah teknologi robotika, dimana teknologi ini dapat dimanfaatkan untuk membantu dan mendukung kehidupan sehari-hari manusia. Robot AprilPoco yang diciptakan oleh perusahaan Toyota, dapat mengendalikan berbagai jenis remote, salah satunya remote AC dan TV melalui koneksi inframerah. Tak hanya itu saja, robot ini juga dapat berbicara dan mengenali perintah suara (voice command operated).
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4>2. Super Sight</h4>
                                    </div>
                                    <div class="col-4 isi">
                                        <img src="asset/artikel3_2.png" class="gambar" width="100%">
                                    </div>
                                    <div class="  col-12">
                                        <h5>
                                            Tingginya penerapan teknologi 5G, VR/AR, machine learning sangat berdampak pada kehidupan manusia sehari-hari. Kemajuan pada kehidupan manusia serta pertumbuhan budaya bisnis tidak lagi dipengaruhi oleh jarak, distorsi, ruang dan permukaan, maupun masa lalu. Adanya jaringan 5G dapat meningkatkan kualitas game VR/AR yang memungkinkan untuk melakukan streaming di dunia virtual dengan resolusi yang tinggi, minim jeda, responsif dan konsisten. Tak hanya itu, aplikasi VR/AR menjadi lebih efisien baik dari segi energi, harga, dan tampilan yang lebih nyata.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12">
                                        <h4>3. Zero Search</h4>
                                    </div>
                                    <div class="col-4 isi">
                                        <img src="asset/artikel3_3.png" class="gambar" width="100%">
                                    </div>
                                    <div class="  col-12">
                                        <h5>
                                            Teknologi data yang mampu mengantisipasi setiap kebutuhan manusia. Dengan adanya teknologi ini, kehidupan sosial dapat terbangun dengan mudah sehingga kita tidak lagi membutuhkan tombol untuk memberi perintah pada aplikasi pencarian di masa depan.
                                            Adanya google assistant, kita tidak perlu repot-repot untuk mengetik apa yang ingin kita cari pada Google search. Hanya dengan mengatakan “Hey Google open Spotify!” maka dalam hitungan detik, google akan menampilkan aplikasi Spotify. </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4>4. Sistem Transportasi Cerdas</h4>
                                    </div>
                                    <div class="col-4 isi">
                                        <img src="asset/artikel3_4.png" class="gambar" width="100%">
                                    </div>
                                    <div class="  col-12">
                                        <h5>
                                            Teknologi yang dilengkapi dengan Cellular Vehicle-to-Everything diprediksikan mampu membangun ikatan antara manusia, kendaraan, dan infrastruktur yang mendorong sistem lalu lintas bebas macet, sistem tanggap kedaruratan yang baik di masa depan. Waze, aplikasi lalu lintas navigasi berbasis komunitas yang serupa dengan google maps namun beda tampilan. Pada aplikasi Waze, pengguna dapat melaporkan berbagai informasi; mulai dari keberadaan polisi, keberadaan kecelakaan, penutupan jalan, dan sebagainya.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12">
                                        <h4>5. Bekerja Berdampingan dengan Robot</h4>
                                    </div>
                                    <div class="col-4 isi">
                                        <img src="asset/artikel3_5.png" class="gambar" width="100%">
                                    </div>
                                    <div class="  col-12">
                                        <h5>
                                            Adanya Teknologi smart automation, wilayah yang membutuhkan akurasi tinggi, sarat bahaya, kebutuhan manufaktur dinilai mampu mendorong terlaksananya transformasi dalam bidang industri.
                                            Machine Vision Quality Control sangat dibutuhkan dalam melakukan proses pengecekan kualitas produk pabrik. Adanya teknologi ini memungkinkan terjadinya inspeksi/pengecekan pada produk dengan hasil yang akurat.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12">
                                        <h4>6. Augmented Creativity</h4>
                                    </div>
                                    <div class="col-4 isi">
                                        <img src="asset/artikel3_6.png" class="gambar" width="100%">
                                    </div>
                                    <div class="  col-12">
                                        <h5>
                                            Adanya Cloud AI diharapkan dapat menghasilkan talenta kreatif di industri, dimana teknologi Cloud AI berperan dalam keuangan dan kendala-kendala yang dihadapi saat pelaksanaan eksperimen berbasis sains, menciptakan inovasi, hingga dibidang seni.
                                            Augmented Creativity menggunakan AR(Augmented Reality) pada perangkat seluler untuk meningkatkan kreativitas pada dunia nyata; seperti untuk mewarnai dan melakukan composing music.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12">
                                        <h4>7. Komunikasi Bebas Hambatan</h4>
                                    </div>
                                    <div class="col-4 isi">
                                        <img src="asset/artikel3_7.png" class="gambar" width="100%">
                                    </div>
                                    <div class="  col-12">
                                        <h5>
                                            Akurasi, pemahaman yang baik, dan kepercayaan merupakan faktor utama yang dibutuhkan dalam mewujudkan sistem komunikasi masa depan. Adanya AI dan analitik big data diharapkan mampu menanggulangi kendala komunikasi antara perusahaan dengan pelanggan.
                                            ChatBot, teknologi yang dapat memberikan respon otomatis dengan memanfaatkan teknologi AI. Selain berperan untuk layanan informasi 24 jam, teknologi ini juga dapat berpengaruh pada strategi penjualan. Melalui teknologi ini, seluruh informasi pengguna akan direkam kemudian diolah menjadi bahan strategi pemasaran.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4>8. Ekonomi Simbiotik</h4>
                                    </div>
                                    <div class="col-12">
                                        <h5>
                                            Aplikasi bisnis berbasis awan diharapkan dapat menjadi pendorong dalam terwujudnya ekosistem global yang kuat dan produktivitas yang meningkat.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4>9. Gelaran 5G Semakin Cepat</h4>
                                    </div>
                                    <div class="col-4 isi">
                                        <img src="asset/artikel3_9.png" class="gambar" width="100%">
                                    </div>
                                    <div class="  col-12">
                                        <h5>
                                            Jaringan cepat 5G memberikan potensi yang besar bagi kehidupan manusia, bisnis, dan masyarakat.
                                            Adanya jaringan 5G dapat memudahkan pengguna dalam kehidupan sehari-hari, salah satu nya untuk mengunduh dan mengupload video dengan kecepatan tinggi. Dengan adanya teknologi 5G ini, pengguna dapat menyaksikan konten-konten yang beresolusi 4K. </h5>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12">
                                        <h4>10. Tata Kelola Digital Global</h4>
                                    </div>
                                    <div class="col-4 isi">
                                        <img src="asset/artikel3_10.png" class="gambar" width="100%">
                                    </div>
                                    <div class="  col-12">
                                        <h5>
                                            Perlunya kemajuan teknologi digital untuk berjalan selaras dengan regulasi terkait dalam berbagi data. Pada 2025, diperkirakan secara global, data akan mencapai 180 ZB(1 ZB = 1 triliun GB) tiap tahunnya.
                                            Semakin banyaknya pemanfaatan teknologi digital pada industri menyebabkan ditinggalkannya teknologi konvensional, teknologi konvensional dapat diibaratkan seperti TV tanpa antena, sedangkan untuk teknologi digital dapat diibaratkan dengan TV kabel.
                                            Adanya teknologi digital, semua akan menjadi efisien, praktis, dan produktif; e-Commerce, e-Gov, e-Procurement kini telah masuk dalam era digital.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12">
                                        <h4 class="text-center">
                                            Nah sobat Informates, sudah tahukah kalian apa saja megatrend dalam perkembangan teknologi dan industri?
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoHeight: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

</body>

</html>