<?php 
$sum = 0;
$i = 100;
while ($i <= 300)
{
    if($i % 3 == 0)//qoldiq qolmas true boladi yani 0 ga teng qodiq qosa 0 ga teng bolmidi
    $sum = $sum +$i;
    $i++;
}
echo "100 - 300 까지의 정수 중 3의 배수의 합 : $sum <br>";
$f = 1;
$count = 0;
while($f <= 100)
{
    if($f % 3 != 0)
    {
        echo "$f"." ";
        $count++;
    }
    if($count % 10 == 0)
    {
    echo "<br>";
    }
    $f++;
    
}
echo "<hr>";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
            width: 600px;
        }
        td{
            border:solid 1px gray;
             text-align:center;
             padding:5px;
        }
    </style>
    <h3> - 구구단 표</h3>
  <table >
<tr> 
    <td>2단</td><td>3단</td><td>4단</td><td>5단</td>
    <td>6단</td><td>7단</td><td>8단</td><td>9단</td>

</tr>  
  <?php 
for($c = 1; $c <= 9; $c++)
{
        echo "<tr>";
        for($a = 2; $a <= 9; $a++)
        {
            $b = $a * $c;
            echo "<td> {$a}x{$c} = $c</td>";
        }
        echo "</tr>";
}
 ?>
</table>
</body>
</html>
<?php
$i= 1;
$sum = 0;
do{
    $sum = $sum + $i;
    $i++;
}while ($i <=10);
echo "합계: $sum";
?>