<?php
session_start();
$servername ="localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=sneaker_shopdb", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_POST['pid'] == "" OR $_POST['pname'] == "" OR $_POST['price'] == "" OR $_POST['quantity'] == "" OR $_POST['status'] == ""){
      if($_POST['pic'] == "" OR $_POST['pic1'] == "" OR $_POST['pic2']){
        echo "<script language=\"JavaScript\"> alert('Please enter the product detail') </script>";
      	echo '<meta http-equiv="refresh" content="0; URL=update_stock.php">';
      }
    }else{
      $strSQL = "INSERT INTO product (P_ID,P_NAME,P_PRICE,P_QUANTITY,P_STATUS) VALUES ";
      $strSQL .= "('".$_POST["pid"]."','".$_POST["pname"]."','".$_POST["price"]."','".$_POST["quantity"]."','".$_POST["status"]."')";

      $strSQL1 = "INSERT INTO product_pic (P_ID,PIC_PATH) VALUES ";
      $strSQL1 .= "('".$_POST["pid"]."','".$_POST["pic"]."')";
      $strSQL2 = "INSERT INTO product_pic (P_ID,PIC_PATH) VALUES ";
      $strSQL2 .= "('".$_POST["pid"]."','".$_POST["pic1"]."')";
      $strSQL3 = "INSERT INTO product_pic (P_ID,PIC_PATH) VALUES ";
      $strSQL3 .= "('".$_POST["pid"]."','".$_POST["pic2"]."')";

    	$conn->exec($strSQL);
      $conn->exec($strSQL1);
      $conn->exec($strSQL2);
      $conn->exec($strSQL3);
      echo "<script language=\"JavaScript\"> alert('Update stock complete!') </script>";
      echo '<meta http-equiv="refresh" content="0; URL=product.php">';
    }

}
catch(PDOException $e)
{
  $con = new mysqli($servername,$username,$password,"sneaker_shopdb");
  $sql = "SELECT * FROM product";
  $objQuerySQL = $con->query($sql);
  while($product = $objQuerySQL->fetch_assoc()) {
    if($product["P_ID"] == $_POST['pid']){
      echo "<script language=\"JavaScript\"> alert('This id is already in use. Please use another.') </script>";
      echo '<meta http-equiv="refresh" content="0; URL=update_stock.php">';
      break;
    }
  }
}
$conn = null;
?>
