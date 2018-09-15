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

  $sql1 = "SELECT * FROM promotion";
  $proQuerySQL = $conn->query($sql1);
  $result=mysqli_query($conn,$sql1);
  $rowcount=mysqli_num_rows($result);
  $rowcount++;
  $check = false;

  if($_POST['rname'] == "" OR $_POST['pname'] == "" OR $_POST['description'] == "" OR $_POST['start'] == "" OR $_POST['end'] == ""){
      echo "<script language=\"JavaScript\"> alert('Please enter detail') </script>";
      echo '<meta http-equiv="refresh" content="0; URL=addpro.php">';
  }else{
    while($rest = $restQuerySQL->fetch_assoc()){
        if($rest["R_NAME"] == $_POST["rname"]){
          $check = true;
          if($_POST["start"] > $_POST["end"]){
            echo "<script language=\"JavaScript\"> alert('Date incorrect') </script>";
            echo '<meta http-equiv="refresh" content="0; URL=addpro.php">';
          }
          else{
            $strSQL = "INSERT INTO promotion (R_ID,P_ID,P_NAME ,P_DESCRIPTION,P_START,P_END) VALUES ";
            $strSQL .= "('".$rest["R_ID"]."', $rowcount ,'".$_POST["pname"]."','".$_POST["description"]."','".$_POST["start"]."','".$_POST["end"]."')";
            $objQuery = $conn->query($strSQL);
            echo "<script language=\"JavaScript\"> alert('Add promotion complete!') </script>";
            echo '<meta http-equiv="refresh" content="0; URL=addpro.php">';
            break;
          }
      }
    }
    if($check == false){
      echo "<script language=\"JavaScript\"> alert('Not found this restaurant') </script>";
      echo '<meta http-equiv="refresh" content="0; URL=addpro.php">';
    }
  }
?>
