<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<p align='center'>";
  echo "รายงานสถานการโควิด-19 แยกจังหวัด";
  echo "</p>";

  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>"; 
  echo "ลำดับ";
  echo "</td>"; 
  echo "<td>"; 
  echo "จังหวัด";
  echo "</td>";
  echo "<td>"; 
  echo "ผู้ป่วยใหม่";
  echo "</td>"; 
  echo "<td>"; 
  echo "ผู้ป่วยรวม";
  echo "</td>"; 
  echo "<td>"; 
  echo "ผู้ป่วยใหม่ในประเทศ";
  echo "</td>"; 
  echo "<td>"; 
  echo "ผู้ป่วยรวมในประเทศ";
  echo "</td>"; 
  echo "<td>"; 
  echo "ผู้เสียชีวิตใหม่";
  echo "</td>"; 
  echo "<td>"; 
  echo "ผู้เสียชีวิตรวม";
  echo "</td>";
  echo "<td>"; 
  echo "วันที่อัพเดท";
  echo "</td>";  
  echo "</tr>";
  
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td>"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td>"; 
    echo $val->province;
    echo "</td>";
    echo "<td>"; 
    echo $val->new_case;
    echo "</td>";
    echo "<td>"; 
    echo $val->total_case;
    echo "</td>";
    echo "<td>"; 
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td>"; 
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td>"; 
    echo $val->new_death;
    echo "</td>";
    echo "<td>"; 
    echo $val->total_death;
    echo "</td>"; 
    echo "<td>"; 
    echo $val->update_date;
    echo "</td>";
    echo "</tr>";
    
  }
  echo "</table>";
