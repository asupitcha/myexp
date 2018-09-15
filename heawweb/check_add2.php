<?php
  $servername ="localhost";
  $username = "root";
  $password = "";
  $dbname = "heawbot";

  $conn = new mysqli($servername,$username,$password,$dbname);
  mysqli_set_charset($conn, 'utf8');
  if($conn->connect_error){
  	die("Connection failed:" .$conn->connect_error);
  }

  $sql = "SELECT * FROM restaurant";
  $restQuerySQL = $conn->query($sql);

  $sql1 = "SELECT * FROM restaurant";
  $proQuerySQL = $conn->query($sql1);
  $result=mysqli_query($conn,$sql1);
  $rowcount=mysqli_num_rows($result);
  $rowcount++;
  $check = false;

  if($_POST['name'] == "" OR $_POST['type'] == "" OR $_POST['location'] == "" OR $_POST['open'] == "" OR $_POST['close'] == ""){
      echo "<script language=\"JavaScript\"> alert('Please enter detail') </script>";
      echo '<meta http-equiv="refresh" content="0; URL=add.php">';
  }else{
    $strSQL = "INSERT INTO restaurant (R_ID,R_NAME,R_TYPE,R_SUBTYPE,R_SUBTYPENAME,R_LOCATION,R_OPEN,R_CLOSE,R_PIC) VALUES ";
    $strSQL .= "($rowcount,'".$_POST["name"]."','".$_POST["type"]."','".$_POST["subtype"]."','".$_POST["subtypename"]."'";
    $strSQL .= ",'".$_POST["location"]."','".$_POST["open"]."','".$_POST["close"]."','".$_POST["pic"]."')";

    $objQuery = $conn->query($strSQL);
    echo "<script language=\"JavaScript\"> alert('Add restaurant complete!') </script>";
    echo '<meta http-equiv="refresh" content="0; URL=index.php">';
  }
?>
