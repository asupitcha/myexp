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

  $sql1 = "SELECT * FROM menu";
  $proQuerySQL = $conn->query($sql1);
  $result=mysqli_query($conn,$sql1);
  $rowcount=mysqli_num_rows($result);
  $rowcount++;
  $check = false;

  if($_POST['rname'] == "" OR $_POST['mname'] == "" OR $_POST['mprice'] == ""){
      echo "<script language=\"JavaScript\"> alert('Please enter detail') </script>";
      echo '<meta http-equiv="refresh" content="0; URL=addmenu.php">';
  }else{
    while($rest = $restQuerySQL->fetch_assoc()){
        if($rest["R_NAME"] == $_POST["rname"]){
          $check = true;
          $strSQL = "INSERT INTO menu (R_ID,M_ID,M_NAME,M_PRICE) VALUES ";
          $strSQL .= "('".$rest["R_ID"]."', $rowcount ,'".$_POST["mname"]."','".$_POST["mprice"]."')";
          $objQuery = $conn->query($strSQL);
          echo "<script language=\"JavaScript\"> alert('Add menu complete!') </script>";
           echo '<meta http-equiv="refresh" content="0; URL=addmenu.php">';
          break;
      }
    }
    if($check == false){
      echo "<script language=\"JavaScript\"> alert('Not found this restaurant') </script>";
      echo '<meta http-equiv="refresh" content="0; URL=addmenu.php">';
    }
  }
?>
