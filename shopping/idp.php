<?php
  while($row = $result->fetch_assoc()) {
    echo "<td>" . $row['P_ID'] . "</td>";
  }
?>
