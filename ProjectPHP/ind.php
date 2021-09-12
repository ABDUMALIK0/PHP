<?php
$name = $_POST["firstname"];
$surname = $_POST["lastname"];
echo"your name:<b>".$name." ".$surname."</b>";
echo "2+2=".(2+2);
$a = (2 == "2"); // birinci son int tip , and ikkinci son string bolishidan qaramsdan  true qaytaridi
$b = (2 === "2"); // birinci son int tip , and ikkinci son string , yani xar xil tip bolganligiga false qaytaridi
$c = (2 != "2"); // xar xil tip bolishidan qaramasdan sonla bir xil bolganligi ucun false qaytaradi chunki "!=" operator faqat teng sonlaga false tengmas sonlaga true qaytaradi 
$d = (2 !== "2"); // xaar xil tip bolganligi ucun true qaytaradi
$f = 2 <=> 2; // 0 agar ikkita son teng bolsa, bu operator orniga 2==2 qoysa boladi
$e = 3 <=> 2; // 1 chap tarafdigi son ong tomondan kotta bolsa ,bu operator orniga 3>2 qoysa boladi
$r = 2 <=> 4; // -1  chap tarafdigi son ong tomondan kickina bolsa ,bu operator orniga 3<4 qoysa boladi
$g = (true && false); //false agar ikkta operator true bolsa true qaytaradi bomasa false
$g = (true and false); //false
$x = (true || false); //true agar ikkita operator ichidan bittasi bosa ham true bolsa true qaytaradi
$x = (true or false); //true
$t = !true; // false agar operator false qaytarsa true ga ozgartiradi yoki teskarisi 
$y = (true xor true); //false  agar 2 ta operatorladan 2 tasi true bolsa false qaytaradi 
$y = (false xor false); //true agar operatorladan 1 tasi true bosa true qaytaradi
$y = (false xor false); //false 2 tasi false bosa false qaytaradi
$a = 5;
if($a > 5):
    echo "0 dan kotta ozgaruvcan";
    elseif($a < 0):
        echo "ozgaruvcan 0 dan kickina";
    else:
        echo "0 blan teng";
    endif; // if.. else  sintaksis blan bir xil faqat qovusdan song {} emas : ikkita nuqta qoyiladi
$a = 1;
$b = 2;
$z = $a < $b ? $a + $b : $a - $b;
echo $z;
$a = 2;
$operation = match($a){ // switch ...case ga oxwagan konstruksiya
    1=>"qowiw",
    2=> "ayiriw",
    default => "javob yoq",

};
echo $operation;
match($a)
{
    1=> $operation = "qowiw",
    2=> $operation = "ayiriw",
    default =>  $operation = "javob yoq",
  
};
echo $operation;
for($i = 1, $j = 1; $i + $j < 10; $i++, $j+=2)
{
    echo "$i + $j = ".$i+$j ."<br>";
}
$counter = 0;
while(++$counter<10):
    echo $counter * $counter."</br>";
endwhile;
$counter = 1;
do
{
    echo $counter * $counter . "<br />";
    $counter++;
}
while($counter<10);
for ($i = 1; $i < 10; $i++)
{
    if($i==5)
    {
        continue;
    }
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}
$numbers = [2,5,6,3,23];
/*$numbers[7] = 34;
echo $numbers[7];*/
$numbers[] = 65;
echo $numbers[5];
print_r($numbers);
$num = array(1,2,3,4,5);
print_r($num);
$numb = [4=>1,1=>135,2=>54, 890,90,89];
print_r($numb); echo "<br>";
$users = ["Begzot","Malik", "Abbos"];
$num = count($users);
for($i=0; $i < $num; $i++){
    echo "$users[$i]<br>";
}
$users = [1=>"Begzot",6=>"Malik", 4=> "Abbos"];
$num = count($users);
foreach($users as $element)
{
    echo "$element <br />";
}
foreach($users as $key => $value)
{
    echo "$key - $value <br/>";
}
?>