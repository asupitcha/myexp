<?php
// require('LoginClass.php');
require('LoginClass.php');
require('UserClass.php');
require('cartClass.php');
session_start();

?>
<?php

	$user1 = $_SESSION['user'];
	$user2 = $user1->getUserID();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>History</title>
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
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->

		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
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
								<a href="home-03.php">Home 	<?php


								?></a>
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
							<li class="sale-noti">
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
									<a href="showStock.php">
										Stock
									</a><br>
									<a href="update_stock.php">
										Update Stock
									</a><br>
									<a href="update_track.php">
										Update Tracking Number
									</a><br>
									<a href="home-03G.php">
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
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="้home-03.php" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
								</li>
							</ul>

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

					<li>
						<a href="shipment.php">Shipment</a>
					</li>
					<li>
						<a href="showHistory.php">History</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->

	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(https://static1.squarespace.com/static/540de9b4e4b0d71f11ee5ed9/584d8870c534a598658028f8/584d8877c534a5986580295b/1481476224526/IMG_7854.jpg);">
		<h2 class="l-text2 t-center">
History</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
		<!-- Cart item -->
			<h5 class="m-text20 p-b-24">History:<br></h5>
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">Invoice no.</th>
							<th class="column-2">Invoice Date</th>
							<th class="column-3">Pay Date</th>

						</tr>

						<?php
						error_reporting(E_ALL ^ E_NOTICE);


						$servername ="localhost";
						$username = "root";
						$password = "";
						$dbname = "sneaker_shopdb";
						$detail = $_SESSION['detail'];

						  $conn = new mysqli($servername,$username,$password,$dbname);
						  if($conn->connect_error){
						  	die("Connection failed:" .$conn->connect_error);
						  }

						  $sql = "SELECT * FROM history WHERE U_ID=$user2";
						  $objQuerySQL = $conn->query($sql);

						  while($row = $objQuerySQL->fetch_assoc()) {
						  echo  '<tr class="table-row">';
							echo   '<form action="current.php" method="POST">';
								$tmp = $row["I_ID"];
							?>    		<td class="column-1"><input type="submit" value="<?php echo $tmp; ?>" name="mybutton" onclick="window.location.href='current.php'" >
						<?php  echo    '<td class="column-2">'.$row["idate"].'</td>';
						  echo    '<td class="column-3">'.$row["pdate"].'</td>';

							echo 		'</form>';
						  echo  '</tr>';
						//  }
							}

					//		if (isset($_POST["mybutton"]))
					 //   {
					  //      echo $_POST["mybutton"];
					   // }
						// ?>

					 </table>
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
		<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
		<script type="text/javascript">
			$('.block2-btn-OK').each(function(){

				$(this).on('click', function(){
					swal("Payment","Complete!", "success");
				});
			});
		</script>

	<!--===============================================================================================-->
<!--===============================================================================================-->

	<script src="js/main.js"></script>

</body>
</html>
