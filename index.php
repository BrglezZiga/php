<?php

echo "Hello World";

$fruits = array ("Apple", "Orange", "Lemon", "Banana", "Kiwi", "Avocado", "Elderberry");

echo "<br>";

$i = 1;
foreach ($fruits as $item)
{
    echo "Fruit nr." . $i . ": " . $item . "<br>" ;
    $i = $i + 1;

}
echo "<br>";

$i = 1;
sort($fruits);
foreach ($fruits as $item)
{
    if (in_array($item[0], ['A', 'E', 'I', 'O', 'U']))
    {
        echo "Fruit nr." . $i . ": " . $item . "<br>" ;
        $i = $i + 1;
    }
}

$AssocArray = [
    'Apple' => '233',
    'Orange' => '52',
    'Lemon' => '4',
];

arsort($AssocArray);
$k = array_keys($AssocArray);
echo $k[0];

