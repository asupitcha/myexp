<?php
    session_start();
    if(isset($_GET['value_key'])){
      $id = $_GET['value_key'];
    }
    else{
      echo "Error";
    }

    $conn = new mysqli("localhost","root","","heawbot");
    mysqli_set_charset($conn, 'utf8');

    if($conn->connect_error){
    	die("Connection failed:" .$conn->connect_error);
    }
    $sql = "SELECT * FROM restaurant WHERE R_ID = '$id' ";
    $objQuerySQL = $conn->query($sql);
    $rest = $objQuerySQL->fetch_assoc();

    $sql1 = "SELECT * FROM menu WHERE R_ID = '$id' ";
    $objQuerySQL1 = $conn->query($sql1);
    $result=mysqli_query($conn,$sql1);
    $rowcount=mysqli_num_rows($result);

    echo $rest["R_OPEN"];
    echo '<br>';
    echo $rest["R_CLOSE"];
    echo '<br>';
    date_default_timezone_set("Asia/Bangkok");
    //$time_now=mktime(date('G'),date('i'),date('s'));
    $time=date('Y-m-d G:i:s',time());
    $open=date('Y-m-d G:i:s', strtotime($rest["R_OPEN"]));
    $close=date('Y-m-d G:i:s', strtotime($rest["R_CLOSE"]));
    echo $open;
    echo '<br>';
    echo $time;
    echo '<br>';
    echo $close;
    echo '<br>';
    if(time() < strtotime($rest["R_CLOSE"]) AND time() > strtotime($rest["R_OPEN"])){
      echo 'open';
    }else{
      echo 'close';
    }

  /*  $time="00:05:00"; //5 minutes
if(strtotime($time)<=strtotime('23:03:00')) {
 echo 'open';
} else {
 echo 'close';
}*/
  echo '<br>';
//$t=date_default_timezone_get();
$date = date('Y-m-d G:i:s', time());
$date1 = date('Y-m-d G:i:s', strtotime('4:00:00 pm'));
if($date > $date1){
  echo 1;
}else{
  echo 2;
}
echo($date . "<br>");
echo($date1 . "<br>");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>HeawBot TU</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    <!-- ****** Top Header Area Start ****** -->
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="https://www.facebook.com/profile.php?id=100026772690593"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area -->
                <div class="col-7 col-sm-6">
                    <div class="signup-search-area d-flex align-items-center justify-content-end">
                        <div class="login_register_area d-flex">
                          <div class="login">
                            <?php
                                if(empty($_SESSION['name'])){ ?>
                                  <div class="login">
                                      <a href="login.html">Sign in</a>
                                  </div>
                              <?php  }
                                else{ ?>
                                  <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="yummyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php  echo $_SESSION['name'];

                              ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="yummyDropdown">
                                  <a class="dropdown-item" href="add.php">Add restaurant</a>
                                  <a class="dropdown-item" href="addmenu.php">Add menu</a>
                                  <a class="dropdown-item" href="addpro.php">Add promotion</a>
                                  <a class="dropdown-item" href="logout.php">Sign out</a>
                                </div>
                                </li>
                              <?php  } ?>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="index.php" class="yummy-logo">HeawBot TU</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <ul class="navbar-nav" id="yummy-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="restaurant.php">Restaurant</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="promotion.php">Promotion</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2><?php echo $rest["R_NAME"];?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="restaurant.php"><i aria-hidden="true"></i> Restaurant</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $rest["R_NAME"];?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <!-- ****** Contatc Area Start ****** -->
    <div class="contact-area section_padding_80">
        <div class="container">

            <!-- Contact Form  -->
            <div class="contact-form-area">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="contact-form-sidebar item wow fadeInUpBig" data-wow-delay="0.1s">
                          <img src="img/restaurant/<?php echo $rest["R_PIC"];?>"  data-wow-delay="0.3s">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 item">
                        <div class="contact-form wow fadeInUpBig" data-wow-delay="0.3s">
                            <h2 class="contact-form-title mb-30">
                              <?php
                                  if(time() < strtotime($rest["R_CLOSE"]) AND time() > strtotime($rest["R_OPEN"])){?>
                                    <font style="background-color:green;" color="White">OPEN</font>
                              <?php }else{ ?>
                                    <font style="background-color:red;" color="White">CLOSE</font>
                            <?php } echo $rest["R_NAME"];?></h2>
                            <!-- Contact Form -->
                            <form action="#" method="post">
                                <div class="form-group">
                                  <?php echo $rest["R_TYPE"] ."/";
                                        echo $rest["R_SUBTYPE"] . "/";
                                        echo $rest["R_SUBTYPENAME"];
                                  ?>
                                </div>
                                <div class="form-group">
                                LOCATION : <?php echo $rest["R_LOCATION"];?>
                                </div>
                                <div class="form-group">
                                  OPEN : <?php echo date("G:i", strtotime($rest["R_OPEN"]));?> - <?php echo date("G:i", strtotime($rest["R_CLOSE"]));?>
                                </div>
                                <div class="form-group">
                                    <?php echo $rest["R_ANNOTAION"];?>
                                </div>
                                 <?php
                                  if($rowcount != 0){
                                    echo 'MENU : ';
                                    while($menu = $objQuerySQL1->fetch_assoc()){
                                              echo $menu["M_NAME"].' ';
                                              echo $menu["M_PRICE"].'฿ ';
                                            }
                                  } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ****** Contact Area End ****** -->



    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>
