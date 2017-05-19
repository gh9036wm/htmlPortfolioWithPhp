<?php
$arr1 = range(1,12);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Using a foreach loop</title>
    <link rel="stylesheet" href="css/multiplyTable.css" type="text/css">
</head>
<body>
<h1>Multiplation Table</h1>
<table>
    
    <?php
  echo  '<tr>';
  echo '<th>&nbsp;'  ;
    // Create first row of table headers
 
       foreach ($arr1 as $number){
           echo "<th>$number</th>";
       }
  echo '</tr>';
  
    for($row =1, $col=1;$row<=12; $row++ ) :
    echo'<tr>';
    if ($col===1){
     echo  "<th>$row</th>";
    }
    
    
    while ($col<=12){
        
      echo  "<td>".$row * $col++."</td>";
        
    }
    
    $col=1;    
    echo '</tr>';
    endfor;
    
    ?>
    
</table>
    
</body>
</html>