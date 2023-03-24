<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

    include "db_conn.php";
    include 'php/User.php';
    $user = getUserById($_SESSION['id'], $conn);
?>
    <!DOCTYPE html>
    <html>

    <head background="img/bg-login2.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="icon" href="https://i.pinimg.com/564x/85/25/33/852533b08e1010f0a0e37811a5753cd6.jpg" type="image/x-icon">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <link href="assets/css/style.css" rel="stylesheet">

        <script src="assets/js/jquery.min.js"></script>
        <!-- <meta http-equiv="refresh" content="5"> -->
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/box.png" rel="apple-touch-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <script src="assets/js/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="./style.css">
    </head>
    <style>
        .txt1 {
            /* Welcome! */

            width: 194px;
            height: 47px;
            left: 182px;
            top: 143px;

            font-family: 'Galindo';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 51px;

            color: #1C315E;

            text-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .txt2 {
            color: #FAAB78;
        }

        .img {
            /* Ellipse 1 */


            position: absolute;
            width: 152px;
            height: 152px;
            left: 53px;
            top: 155px;

            background: url(S__8142868.jpg);
        }

        .imgRa {
            border-radius: 80%;
            width: 40%;
            height: 30%;
        }
        body {
        background-image: url('img/bg-login22.png');
        background-repeat: no-repeat;
        background-position: center top;
}
.bg{
   background-color: #dcdde2;  
}
    </style>

    <body class="bg">

        <?php if ($user) { ?>
            <div class="d-flex justify-content-center align-items-center vh-100">

                <div class="shadow w-350 p-3 text-center">
                    <center>
                        <center><img src="img/logo-removebg-preview2.png" alt="" sizes="50" srcset=""></center><br>
                        <a href="main/index.php"><button type="button" class="btn btn-outline-danger">BACK!</button></a><br><br>
                        </nav>
                        <!--<img src="upload/<?= $user['pp'] ?>" class="img-fluid rounded-circle ">-->
                        <img src="upload/<?= $user['pp'] ?>" class="img-fluid imgRa ">
                        <h3 class="display-4 txt1"><b><?= $user['fname'] ?></b></h3>
                        <a href="edit.php" class="btn btn-primary">
                            Edit Profile
                        </a>
                        <a href="logout.php" class="btn btn-warning">
                            Logout
                        </a>
                    </center>
                </div>

            </div>
        <?php } else {
            header("Location: login.php");
            exit;
        } ?>
        <script src="./script.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
    </body>

    </html>

<?php } else {
    echo "ยังไม่ได้จ้าา";
    //header("Location: login.php");
    exit;
} ?>