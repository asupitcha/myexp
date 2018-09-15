<<?php
// require('LoginClass.php');
require('LoginClass.php');
require('UserClass.php');
require('cartClass.php');
require('Invoice.php');
session_start();

?>
<?php
  $tmp = $_SESSION['number'];
	$user1 = $_SESSION['user'];
	$user2 = $user1->getUserID();
  $detail = $_SESSION['detail'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Invoice</title>
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
					Free shipping for standard order over $100

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

	<!-- Cart -->
  <section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
		<!-- Cart item -->
    <?php
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "sneaker_shopdb";

			$conn = new mysqli($servername,$username,$password,$dbname);
			if($conn->connect_error){
				die("Connection failed:" .$conn->connect_error);
			}

			if (isset($_POST["mybutton"]))
			{
					$tmp = $_POST["mybutton"];
					$sql2 = "SELECT * FROM invoice WHERE I_ID = $tmp";
					$objQuerySQL2 = $conn->query($sql2);
					$row2 = $objQuerySQL2->fetch_assoc();
					$detail->setID($row2["I_ID"]);
					$detail->setName($row2["Name"]);
					$phone = $detail->setPhone($row2["Phone_number"]);
					$addr = $detail->setAddr($row2["Addr"]);
					$type = $detail->setType($row2["Type"]);
			}
      $id = $detail->getID();
      $date = $detail->getDate();
      $name = $detail->getName();
      $phone = $detail->getPhone();
      $addr = $detail->getAddr();
      $type = $detail->getType();
    ?>
			<h5 class="m-text20 p-b-24">Invoice no : <?php echo $id ?><br></h5>
      <h class="m-text15 p-b-15"><?php echo $type ?><br></h>
      <h class="m-text15 p-b-15">Date : <?php echo $date ?><br></h>
      <h class="m-text15 p-b-15">Name : <?php echo $name ?><br></h>
      <h class="m-text15 p-b-15">Phone number : <?php echo $phone ?><br></h>
      <h class="m-text15 p-b-15">Address : <?php echo $addr ?><br></h>
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">Product id</th>
							<th class="column-1">Product Name</th>
							<th class="column-1">amount</th>
							<th class="column-1">Price</th>
              <th class="column-1">Total Price</th>
						</tr>

            <?php
				//		error_reporting(E_ALL ^ E_NOTICE);

						  $sql = "SELECT * FROM cart WHERE U_ID=$user2 AND I_ID=$tmp";
						  $objQuerySQL = $conn->query($sql);
              while($row = $objQuerySQL->fetch_assoc()){
              $sql1 = "SELECT * FROM product ";
              $objQuerySQL1 = $conn->query($sql1);

						  while($row1 = $objQuerySQL1->fetch_assoc()) {
                if($row["P_ID"] == (int)$row1["P_ID"]){

						  echo  '<tr class="table-row">';
						  echo    '<td class="column-1">'.$row1["P_ID"].'</td>';
						  echo    '<td class="column-1">'.$row1["P_NAME"].'</td>';
						  echo    '<td class="column-1">'.$row["amount"].'</td>';
						  echo    '<td class="column-1">'.$row1["P_PRICE"].'</td>';
              echo    '<td class="column-1">'.($row["amount"]*$row1["P_PRICE"]).'</td>';
					    echo  '</tr>';
          //      $sum +=($row["amount"]*$row1["P_PRICE"]);
						  }
						}
          }

                $total = $_SESSION['total'];
                $vat = $_SESSION['vatTotal'];
                echo  '<tr class="table-row">';
                echo    '<td class="column-1">'.'</td>';
                echo    '<td class="column-1">'.'</td>';
                echo    '<td class="column-1">'.'</td>';
                echo    '<td class="column-1">'.'Total'.'</td>';
                echo    '<td class="column-1">'.$total.'</td>';
                echo  '</tr>';

                echo  '<tr class="table-row">';
                echo    '<td class="column-1">'.'</td>';
                echo    '<td class="column-1">'.'</td>';
                echo    '<td class="column-1">'.'</td>';
                echo    '<td class="column-1">'.'VAT'.'</td>';
                echo    '<td class="column-1">'.$vat.'</td>';
                echo  '</tr>';
      						 ?>

					 </table>
				</div>
		</div>
    <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
      <div class="flex-w flex-m w-full-sm">

        <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
          <!-- Button -->
          <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="printFN()">
            PRINT
          </button>
        </div>
      </div>

      <div class="size10 trans-0-4 m-t-10 m-b-10">
        <!-- Button -->
        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="window.location.href='showHistory.php'">
          OK
        </button>
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

    function printFN(){
      window.print();
    }
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
