<?php
error_reporting(E_ALL ^ E_NOTICE);
require('LoginClass.php');
require('UserClass.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Tracking</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="https://www.facebook.com/nerdgallery/" target="_blank" class="topbar-social-item fa fa-facebook"></a>
					<a href="https://www.facebook.com/nerdgallery/" target="_blank" class="topbar-social-item fa fa-instagram"></a>
					<a href="https://www.facebook.com/nerdgallery/" target="_blank" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="https://www.facebook.com/nerdgallery/" target="_blank" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="https://www.facebook.com/nerdgallery/" target="_blank" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over 3000฿
				</span>

				<div class="topbar-child2">

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>THB</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="home-03.php" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="home-03.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li>
								<a href="cart.php">Cart</a>
							</li>

							<li>
								<a href="shipment.php">Shipment</a>
							</li>
							<li>
								<a href="showHistory.php">History</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<div class="header-wrapicon2">
						<div class="header-icon1 js-show-header-dropdown">
							<li>
							<?php
								$user1 = $_SESSION['user'];
								$result = $user1->getFirstName();
								echo $result;
							?>
							</li>
						</div>
						<!-- Log out -->
						<div class="header-cart header-dropdown">
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="update_stock.php">
										Update Stock
									</a><br>
									<a href="update_track.php">
										Update Tracking Number
									</a><br>
									<a href="home-03.html">
										Log out
									</a>
								</div>
							</div>
						</div>
					</div>
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<a href="cart.php">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="home-03.php" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<h4 class="m-text10 ">
							<a href="login.html">Login </a>
						</h4>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">

							<div class="header-cart-total">
								Total: 0.00฿
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>THB</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="home-03.php">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.php">Cart</a>
					</li>

					<li class="item-menu-mobile">
						<a href="shipment.php">Library</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->
	<section class=""
	>
		<h2 class="l-text2 t-center">
			Update Stock
		</h2>
	</section>

	<!-- content page -->
	<div class="container-table-cart pos-relative">
		<div class="wrap-table-shopping-cart bgwhite">
			<table class="table-shopping-cart">
				<tr class="table-head">
					<th class="column-1">Invoice no.</th>
					<th class="column-2">Invoice Date</th>
					<th class="column-3">Pay Date</th>
					<th class="column-4">Status</th>
					<th class="column-5">Tracking</th>
				</tr>

				<?php

				$servername ="localhost";
				$username = "root";
				$password = "";
				$dbname = "sneaker_shopdb";

					$conn = new mysqli($servername,$username,$password,$dbname);
					if($conn->connect_error){
						die("Connection failed:" .$conn->connect_error);
					}


					$sql = "SELECT * FROM history";
					$objQuerySQL = $conn->query($sql);

				//  $result = $user1->getUserID();
					while($row = $objQuerySQL->fetch_assoc()) {
					//  if($row["U_ID"] == $result){

					echo  '<tr class="table-row">';
					echo    '<td class="column-1">'.$row['I_ID'].'</td>';
					echo    '<td class="column-2">'.$row["idate"].'</td>';
					echo    '<td class="column-3">'.$row["pdate"].'</td>';
					echo    '<td class="column-4">'.$row["status"].'</td>';
					echo    '<td class="column-5">'.$row["tracking"].'</td>';
					echo  '</tr>';
				//  }
				}
				// ?>

			 </table>
		</div>

</div>

	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">

			<div class="row">
				<div class="col-md-6 p-b-30">

						<h4 class="m-text26 p-b-36 p-t-15">
							Update Tracking
						</h4>
						<form name="" action="shipment.php" method="post">

						<tr class="table-row">

							<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="order_number" placeholder="Order Number">

							</div>
							<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="track_number" placeholder="Tracking Number">
							</div>
						</tr>




							<!-- Button -->
							<div class="size10 trans-0-4 m-t-10 m-b-10 m-r-10">
								<!-- <form action="" method="post"> -->
									<input type="submit" name="submit" value="Submit"  class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								<!-- </form> -->
						</div>
					</form>
						<?php
						function select(){
   						echo "The select function is called.";
						}
						?>

						</div>

				</div>
			</div>

		</div>
	</section>


<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
