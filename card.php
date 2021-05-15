<?php
    include $_SERVER['DOCUMENT_ROOT']."/web_inbullz-main/database.php";

    if(isset($_POST['upload_button'])){

        try{
            $sql = "INSERT INTO kesan_pesan values (default, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$_POST['nama'], $_POST['kesan'], $_POST['pesan']]);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    $sql2 = "SELECT * FROM kesan_pesan";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute();
?>

<!DOCTYPE html>
<html lang='en'>

<head>
	<!-- <meta charset="UTF-8"> -->
	<title>Mading Inbullz</title>
    <link rel="stylesheet" href="cardStyle.css">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- <meta name="msapplication-TileColor" content="#f2f0e7">
	<meta name="theme-color" content="#f2f0e7">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="main" class="main2">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Masukkan Pesan dan Kesan</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama: </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Ketik Nama"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="kesan">Kesan: </label>
                                <textarea type="text" name="kesan" id="kesan" class="form-control" placeholder="Ketik Kesan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan: </label>
                                <textarea type="text" name="pesan" id="pesan" class="form-control" placeholder="Ketik Pesan"></textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label for="ucapan">ucapan: </label>
                                <textarea type="text" name="ucapan" id="ucapan" class="form-control" placeholder="Ketik ucapan" disabled></textarea>
                            </div> -->
                            <button type="submit" class="btn btn-primary" name="upload_button" value="Insert">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <a href="Inbullz.html">
                    <img src="caterpillar.png" alt="" width="50%">
                </a>
            </div>
        </div>

		<div class="container mx-auto px-0">
			<div class="row mt-5 justify-content-center mx-0">
				<div class="col-12 px-0" style="margin-bottom: -5%">
					<div id="arrowAnim" class="d-none d-sm-flex" style="margin-top: -230px ">
						<div class="arrowSliding">
							<div class="arrow"></div>
						</div>
						<div class="arrowSliding delay1">
							<div class="arrow"></div>
						</div>
						<div class="arrowSliding delay2">
							<div class="arrow"></div>
						</div>
						<div class="arrowSliding delay3">
							<div class="arrow"></div>
						</div>
					</div>
					<?php
                        $count = 0;
                        while($isi=$stmt2->fetch()){
                    ?>
                        <?php
                            if($count % 2 == 0){
                        ?>
                        <div class='card ml-sm-auto mr-sm-5 mx-auto wish-card my-5 my-sm-5' data-aos='fade-left' data-aos-duration='1000'>
                        <?php
                            }
                            else{
                        ?>
                        <div class='card mr-sm-auto ml-sm-5 mx-auto wish-card my-5 my-sm-5' data-aos='fade-right' data-aos-duration='1000' >
                        <?php
                            }
                        ?>
                            <div class='card-header'>
                                <?php echo $isi['nama'] ?>
                            </div>
                            <div class='card-body'>
                                <h4>Kesan :</h4>
                                <?php echo $isi['kesan'] ?>
                                <h4>Pesan :</h4>
                                <?php echo $isi['pesan'] ?>
                            </div>
                        </div>
                    <?php
                        $count++;
                        }
                    ?>

                    <!-- <div class='card ml-sm-auto mr-sm-5 mx-auto wish-card my-5 my-sm-5' data-aos='fade-left' data-aos-duration='1000'>
                        <div class='card-header'>
                            Shania Vanessa Tanain
                            <br>
                            Universitas Ciputra 
                        </div>
                        <div class='card-body'>
                            Saya mau berterimakasih atas kerja keras para tenaga medis yang telah berjuang dan berkorban demi kita semua ❤️
                        </div>
                    </div>
                    <div class='card mr-sm-auto ml-sm-5 mx-auto wish-card my-5 my-sm-5' data-aos='fade-right' data-aos-duration='1000' >
                        <div class='card-header'>
                            Gabriella Gunawan 
                            <br>
                            Universitas Kristen Petra
                        </div>
                        <div class='card-body'>
                            Dengan tulus kuucapkan terimakasih kepada segenap Tenaga Medis untuk perjuangan, waktu, tenaga, keringat dan pengorbanan kalian. Jasamu sungguh berarti untuk kami di generasi ini.
                        </div>
                    </div>
                    <div class='card ml-sm-auto mr-sm-5 mx-auto wish-card my-5 my-sm-5' data-aos='fade-left' data-aos-duration='1000'>
                        <div class='card-header'>
                            Nakita Audelia
                            <br>
                            Universitas Surabaya
                        </div>
                        <div class='card-body'>
                            Terima kasih buat perjuangannya untuk seluruh tenaga medis! Semoga tetap sehat dan semangat, God bless!
                        </div>
                    </div>
                    <div class='card mr-sm-auto ml-sm-5 mx-auto wish-card my-5 my-sm-5' data-aos='fade-right' data-aos-duration='1000' >
                        <div class='card-header'>
                            Viona Wijaya
                            <br>
                            Universitas Ciputra
                        </div>
                        <div class='card-body'>
                            hanya bisa bilang TERIMA KASIH
                        </div>
                    </div>
                    <div class='card ml-sm-auto mr-sm-5 mx-auto wish-card my-5 my-sm-5' data-aos='fade-left' data-aos-duration='1000'>
                        <div class='card-header'>
                            Samuel Njoo
                            <br>
                            Universitas Kristen Petra
                        </div>
                        <div class='card-body'>
                            Thank you for the hardwork ! Stay Positive but don't get positive guys ! :)
                        </div>
                    </div> -->
                </div>
			</div>
		</div>
	</div>
	

	<script>
		AOS.init();
		AOS.init({
			disable: 'mobile'
		});
	</script>
</body>

</html>