<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all");
  $data = json_decode($json);

  echo "<table border='1'>";

  for($i=0;$i<1;$i++){
          echo "<tr>";
  }

  echo "</table>";
?>
