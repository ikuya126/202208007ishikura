
<table border="1" style="border-collapse: collapse" >
<?php
for($a = 1; $a <= 9 ; $a++){ 
  echo "<tr>";
  for($b = 1; $b <= 9 ; $b++){
    $c = $a * $b;
    echo "<td>" .$c . "</td>";
  }
  echo "</tr>";
}
?>
</table>



