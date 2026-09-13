<?php
echo "<h3>Basic Array</h3>";
$foods = ["apple","banana","coconut","orange","pineapple","pizza"];
foreach($foods as $food ){
    echo "{$food}, ";
}
// array pop last item
array_pop($foods);
echo "<br>";
foreach($foods as $food ){
    echo "{$food}, ";
}
// array push 
array_push($foods,"chili chicken","Tandori");
echo "<br>";
foreach($foods as $food ){
    echo "{$food}, ";
}
//delete first item and shift other item
array_shift($foods);
echo "<br>";
foreach($foods as $food ){
    echo "{$food}, ";
}
//reverse
$rev_foods = array_reverse($foods);
echo "<br>";
foreach($rev_foods as $food ){
    echo "{$food}, ";
}
echo "<br><br> <h3>Associative array</h3>";
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington, D.C",
    "Japan" => "Tokeyo",
    "Russia" => "Moscow",
    "Italy" => "Rome"
];
$countries["India"] = "Kolkata";
$countries["Nepal"] = "Kathmandu";
foreach($countries as $key => $value){
    echo "{$key} = {$value} <br>";
}
echo"<br>";

//return array keys in new array
$keys = array_keys($countries);
foreach($keys as $key){
    echo $key."<br>";
};

echo"<br>";

//return array values in new array
$values = array_values($countries);
foreach($values as $value){
    echo $value."<br>";
};

echo"<br>";
//flip the keys to values
$rev_countries = array_flip($countries);
foreach($rev_countries as $key => $value){
    echo "{$key} = {$value} <br>";
}
echo"<br>";
ksort($countries);
foreach($countries as $key => $value){
    echo "{$key} = {$value} <br>";
}
echo"<br>";
asort($countries);
foreach($countries as $key => $value){
    echo "{$key} = {$value} <br>";
}
?>