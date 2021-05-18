<?php
include_once "database.php";
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mading Inbullz</title>

    <script src="https://kit.fontawesome.com/9a4ce0d1db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="notesStyle.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <?php

    if (isset($_POST['save_button']) && isset($_POST['note'])) {
        if ($_POST['note'] != "") {
            try {
                $sql = "INSERT INTO notes values (default, ?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$_POST['note']]);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            echo "<script type='text/javascript'>$.alert({title:'Alert!', content:'harus di isi yaa', type:'red', icon: 'fa fa-warning'});</script>";
        }
    }

    $sql2 = "SELECT * FROM notes";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute();
    ?>
</head>

<body>
    <div class="background-image">
        <img src="asset/bgoverlay.jpg" alt="">
    </div>
    <div class="row">
        <div class="col-2 ">
            <button class="btn btn-success" onclick="createNote()">Add New Note</button>
        </div>
        <div class="offset-8 col-2" style="height: 10vw;">
            <div class=" judul-mading">
                <img src="asset/judul.png" alt="" class="hide">
                <a class="judul-mading-hover" href="Inbullz.php">
                    <img src="asset/judul_hover.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <form action="" method="post">
        <ul id="list-note">
            <?php
            while ($isi = $stmt2->fetch()) {
            ?>
                <li>
                    <a href='#'>
                        <?php echo $isi['note'] ?>
                    </a>
                </li>

            <?php
            }
            ?>
            <!-- <li>
            <a href="#" contenteditable>
            <h2>Title #1</h2>
            <p>Text Content #1</p>
            </a>
        </li>
        <li>
            <a href="#" contenteditable>
            <h2>Title #2</h2>
            <p>Text Content #2</p>
            </a>
        </li>
        <li>
            <a href="#" contenteditable>
            <h2>Title #3</h2>
            <p>Text Content #3</p>
            </a>
        </li>
        <li> -->
        </ul>
    </form>
    <script src="notesScript.js"></script>

</body>
<!-- <script>
    $(document).ready(function () {
        all_notes = $("li a");

        all_notes.on("keyup", function () {
            note_title = $(this).find("h2").text();
            note_content = $(this).find("p").text();

            item_key = "list_" + $(this).parent().index();

            data = {
            title: note_title,
            content: note_content
            };

            window.localStorage.setItem(item_key, JSON.stringify(data));
        });

        all_notes.each(function (index) {
            data = JSON.parse(window.localStorage.getItem("list_" + index));

            if (data !== null) {
            note_title = data.title;
            note_content = data.content;

            $(this).find("h2").text(note_title);
            $(this).find("p").text(note_content);
            }
        });
    });
  </script> -->


</html>