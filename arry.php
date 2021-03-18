<?php
$my_numbers = array(12, 45, 34, 78, 45, 98);
echo asort($my_numbers);

$users = array(
    array(
        'id' => 5211,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 5421,
        'first_name' => 'Mark',
        'last_name' => 'Henry',
    ),
    array(
        'id' => 6523,
        'first_name' => 'Barry',
        'last_name' => 'Allen',
    ),
    array(
        'id' => 7541,
        'first_name' => 'Peter',
        'last_name' => 'Parker',
    )
);

echo "<br>";
$arr = array_column($users, "first_name");
var_dump($arr);
?>
