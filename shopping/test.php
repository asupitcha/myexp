<form action="" method="POST">
    <input type="submit" value="0" name="mybutton">
    <input type="submit" value="1" name="mybutton">
    <input type="submit" value="2" name="mybutton">
    <a href="#" value="this" name="mybutton">111</a>
</form>

<?php
   if (isset($_POST["mybutton"]))
   {
       echo $_POST["mybutton"];
   }
?>
