<!DOCTYPE html>
<?php
error_reporting(E_ALL ^ E_NOTICE);
require('LoginClass.php');
require('UserClass.php');
require('cartClass.php');
session_start();

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment</title>'\'
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
<style>
	button.accordion{
		background-color: White;
		color: White;
		cursor: pointer;
		padding: 18px;
		width: 100%;
		border: none;
		transition: 0.4s;
	}
	button.accordion.active, button.accordion:hover;{
		background-color: Black;
	}
	div.panel {
		padding: 0 18px;
		background-color: White;
		max-height: 0;
		overflow: hidden;
		transition: max-height 0.2s ease-out;
	}
</style>

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

							<li class="sale-noti">
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
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
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
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/1920-239-5.jpg);">
		<h2 class="l-text2" align = "left">
			Payment
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">
								<button class="accordion">
                <a href="https://www.paypal.com/th/home?locale.x=th_TH">
                <img src="https://www.aripfan.com/wp-content/uploads/2017/05/013-v2-1024x577.jpg" width="200" height="150">
              </a></button>
              </th>
							<th class="column-2">
								<button class="accordion">
									<a href="creadit.php">
                <img src="https://png.icons8.com/ios/1600/bank-card-back-side.png" width="150" height="150">
								</button>
							<!--	<div class="panel">-->
						<!--		<div>
						      <h1>add Credit card/Debit card</h1>
									<form name="submit_btn" method="post" action="CheckPayment.php">
						      <p>  <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" id="name"placeholder="ชื่อที่ปรากฏบนบัตร"><br></p>
						      <p>  <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="number" id="number" placeholder="หมายเลขบัตรเครดิต"><br></p>
						      <p>วันหมดอายุ<br>
						        <input type="text" size="10" name="month" id="month" placeholder="month">
						        <input type="text" size="10" name="year" id="year" placeholder="year">
						      </p>
						      <p>CVV<br>
						        <input type="text" size="10" name="cvv" id="cvv" placeholder="000">
						      </p>
						      <p><input type="text" size="50" name="address" id="addr" placeholder="address"></p>
						      <p><input type="text" size="10" name=zipCode id="zip" placeholder="Zip Code"></p>

									<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
										<div class=" size10 trans-0-4 m-t-10 m-b-10">

												<input type="button" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="OK" onclick="window.location.href='Check_Payment.php'">
										</div>

									</form>-->
				<div class="flex-w flex-m w-full-sm">

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<a href="cart.html">
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							cancel
						</button>
					</a>
					</div>
				</div>
			</div>

								</div>
								<script>
									var acc = document.getElementsByClassName("accordion");
									var i;

									for(i=0; i<acc.length; i++){
										acc[i].onclick = function(){
											this.classList.toggle("active");
											var panel = this.nextElementSibling;
											if(panel.style.maxHeight){
												panel.style.maxHeight = null;
											}else{
												panel.style.maxHeight = panel.scrollHeight + "px";
											}
										}
									}
								</script>
        				</div>
              </th>
						</tr>
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
			function doTestClick() {

					var name = document.getElementById("name").value;
					var number = document.getElementById("number").value;
					var month = document.getElementById("month").value;
					var year = document.getElementById("year").value;
					var cvv = document.getElementById("cvv").value;
					var addr = document.getElementById("addr").value;
					var zip = document.getElementById("zip").value;

			    if (name == '' || number==''|| month==''|| year==''|| cvv==''|| addr==''|| zip=='') {

			        swal("ERROR","please, try again!");
			    } else {
			   //    swal("Complete!","Thank you","success");
					//	 header( "Location:showHistory.php" );
					}

			};

		</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>
