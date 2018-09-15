<?php
  $id=001;
  $sql="SELECT * FROM `product` where P_ID='001' ";
  $id="";
  $product_price="";
  if($query_run=mysqli_query(mysqli_connect("localhost","root","","sneaker_shopdb"),$sql))
  {
    while($row=mysqli_fetch_assoc($query_run))
    {
      $product_idp=$row['P_ID'];
      $product_name=$row['P_NAME'];
      $product_pri=$row['P_PRICE'];
      $product_status=$row['P_STATUS'];
    }
  }
  //$id=1;
  $sql="SELECT * FROM `product_pic` ` where P_ID='001' ";
  $id="1";
  $product_price="";
  $p1="";
  $p2="";
  $p3="";
  $count=0;
  if($query_run=mysqli_query(mysqli_connect("localhost","root","","sneaker_shopdb"),$sql))
  {
    while($pic=mysqli_fetch_assoc($query_run))
    {
      if($pic['P_ID']==001){
        if ($count==0) {
          $p1=$pic['PIC_PATH'];

        }
        if ($count==1) {
          $p2=$pic['PIC_PATH'];

        }if ($count==2) {
          $p3=$pic['PIC_PATH'];

        }
        $count=$count+1;
      }
    }
  }

?>
<?php
  echo '<img src=" images/Product/pro' .$id. '/' .$p1. '" alt="IMG-PRODUCT">'.'<br>';
  echo '<img src=" images/Product/pro' .$id. '/' .$p2. '" alt="IMG-PRODUCT">'.'<br>';
  echo '<img src=" images/Product/pro' .$id. '/' .$p3. '" alt="IMG-PRODUCT">'.'<br>';
  echo   $product_idp.'<br>';
  echo   $product_name.'<br>';
  echo   $product_pri.'<br>';
  echo   $product_status.'<br>';
?>
