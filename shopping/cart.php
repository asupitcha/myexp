<?php
error_reporting(E_ALL ^ E_NOTICE);
require('LoginClass.php');
require('UserClass.php');
require('cartClass.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
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
<?php

					$str = 	$_SESSION['myCart'];
					$aaa =  (explode(" ",$str));
					$bb = 0;
					$bb = count($aaa);
					$total = 0;
					$amount = 0;
					for ($i=0; $i<$bb; $i++) {
						$sql2="SELECT * FROM product where P_ID=$aaa[$i] ";
							echo "$aaa[$i]";
								$product_price="";
								// $p1="";
								// $p2="";
								// $p3="";
								$count=0;

								if($query_run=mysqli_query(mysqli_connect("localhost","root","","sneaker_shopdb"),$sql2))
									{
										while($pic=mysqli_fetch_assoc($query_run))
										{


													// $p1=$pic['PIC_PATH'];
													$p_name = $pic['P_NAME'];
													$p_price = $pic['P_PRICE'];

													$total += (int) $p_price;
													$amount +=1;
												}
											}
										}


 ?>


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
								<a href="home-03.php">Home
										<?php
								session_start();

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

					<li class="item-menu-mobile">
						<a href="shipment.php">Library</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/1600-925-1.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- ตาราง -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">Product</th>
							<th class="column-2">Price</th>
							<th class="column-3">Amount</th>
							<th class="column-4 ">Total</th>
							<th class="column-5">Cancel</th>
							<!-- <th class="column-6">Cancel</th> -->
						</tr>

						<?php
							$str = 	$_SESSION['myCart'];
							$aaa =  (explode(" ",$str));
							$arrCart =array_count_values($aaa);
							$bb = 0;
							$bb = count($aaa);
							$total = 0;
							$amount = 0;
							foreach($arrCart as $key => $val) {
								$sql2="SELECT * FROM product where P_ID=$key ";
								$product_price="";
								$count=0;
								if($query_run=mysqli_query(mysqli_connect("localhost","root","","sneaker_shopdb"),$sql2))
									{
										while($pic=mysqli_fetch_assoc($query_run))
											{
												$p_name = $pic['P_NAME'];
												$p_price = $pic['P_PRICE'];
												$total += (int) $p_price*$val;
												$amount +=$val;
												echo '<tr class="table-row">';
												echo '<td class="column-1">'.$p_name.'   </td>';
												echo '<td class="column-2">'.$p_price.'  ฿</td>';
												echo '<td class="column-3">'.$val.'</td>';
												echo '<td class="column-4">'.$p_price*$val.'฿</td>';
												echo '<th class="column-6">';
												echo'<form action="cart.php" method="POST">';
												echo'<button class="flex-c-m size7 bg1 bo-rad-23 hov1 s-text1 trans-0-4"name='.$key.'>-';
												echo'</button>';
												if( isset($_POST[$key]) ){
													$remove = $key;
													$_SESSION['myCart'] = "";
													foreach($arrCart as $key => $val) {
														if(strcmp($remove,$key)!=0){
															for ($x = 0; $x < (int) $val; $x++) {
												  	 			$_SESSION['myCart'].=$key." ";
															}
														}
													}
													echo "<script>location.reload();</script>";
												}else{
													$b = $aaa[$i];
												}
						?>
						</form>
						<?php
							echo '	</div>';
							echo '</th>';
							echo '	</tr>';
											}

										}
									}

						?>
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- ยกเลิกรายการทั้งหมด -->
						<form action="cancelCart.php" method="post">
						<!-- <form method="post" action="cancelCart()"> -->

						<button type="submit" class="flex-c-m size14 bg1 bo-rad-23 hov1 s-text1 trans-0-4" name="flag">cancel

					</button>

					</form>
					<?php
					function cancelCart()
{
	unset($_SESSION['myCart']);
	// echo "<script>location.reload();</script>";
}
if(isset($_POST['submit']))
{
   cancelCart();
}



 					?>


					</div>
				</div>


			</div>

			<!-- คำนวน -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>
				<!-- จำนวนสินค้า -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">Total Amount</span>

					<span class="m-text21 w-size20 w-full-sm">
						<?php
							if($amount>1){
								echo "$amount  pieces" ;
							}else{
								echo "$amount  piece";
							}
						?>
					</span>
				</div>
				<!--ราคาทั้งหมด  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">	Total Cash	</span>

					<span class="m-text21 w-size20 w-full-sm">	<?php echo "$total " ?>฿	</span>
				</div>
				<!-- ราคาสินค้าทั้งหมด+ภาษี 7% -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">	VAT(7%)	</span>

					<span class="m-text21 w-size20 w-full-sm">
						<?php
								$vat_total = (double) $total*1.07;
								echo "$vat_total"
							?> ฿
					</span>
				</div>
				<?php
					$_SESSION["total"] = $total;
					$_SESSION["vatTotal"] = $vat_total;
				?>

				<div class="size15 trans-0-4">
					<!-- Button -->
				</button>
				<input type="button" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="check out" onclick="window.location.href='saveCart.php'">

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
	<script src="js/main.js"></script>

</body>
</html>
