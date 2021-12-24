<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

  echo "<h3 align = 'center'>";
  echo "<p>";
  echo "รายงานสถานการโควิด-19 แยกจังหวัด";
  echo "</p>";
  echo "</h3>";

  echo "<table border='1'>";
  echo "<tr align = 'center'>";
  echo "<td bgcolor="pink">"; 
  echo "ลำดับ";
  echo "</td>"; 
  echo "<td bgcolor="pink">"; 
  echo "จังหวัด";
  echo "</td>";
  echo "<td bgcolor="pink">"; 
  echo "ผู้ป่วยใหม่";
  echo "</td bgcolor="pink">"; 
  echo "<td>"; 
  echo "ผู้ป่วยรวม";
  echo "</td bgcolor="pink">"; 
  echo "<td bgcolor="pink">"; 
  echo "ผู้ป่วยใหม่ในประเทศ";
  echo "</td>"; 
  echo "<td bgcolor="pink">"; 
  echo "ผู้ป่วยรวมในประเทศ";
  echo "</td>"; 
  echo "<td bgcolor="pink">"; 
  echo "ผู้เสียชีวิตใหม่";
  echo "</td>"; 
  echo "<td bgcolor="pink">"; 
  echo "ผู้เสียชีวิตรวม";
  echo "</td>";
  echo "<td bgcolor="pink">"; 
  echo "วันที่อัพเดท";
  echo "</td>";  
  echo "</tr>";

  foreach($data as $key=>$val){
    echo "<tr align = 'center'>";
    echo "<td bgcolor="pink">"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td bgcolor="pink">"; 
    echo $val->province;
    echo "</td>";
    echo "<td bgcolor="pink">"; 
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor="pink">"; 
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor="pink">"; 
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor="pink">"; 
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor="pink">"; 
    echo $val->new_death;
    echo "</td>";
    echo "<td bgcolor="pink">"; 
    echo $val->total_death;
    echo "</td>"; 
    echo "<td bgcolor="pink">"; 
    echo $val->update_date;
    echo "</td>";
    echo "</tr>";
    
  }
  echo "</table>";
