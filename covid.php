<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);
<html>
  <head>
  </head>
  <body>
    <table border="0">
      <?php
        for($i=0;$i<100;$i++){
          echo "<tr>";
          echo "<td>คอลัมน์</td>";
          echo "<td>คอลัมน์</td>";
          echo "<td>คอลัมน์</td>";
          echo "<td>คอลัมน์</td>";
          echo "<td>คอลัมน์</td>";
          echo "<td>คอลัมน์</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>

  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }

  echo "</table>";
?>
