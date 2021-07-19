<?php

foreach (range(-5, 3) as $num) {
    echo "$num ";
}


$homies = [
    ['name' => 'Ivan', 'age' => 15],
    ['name' => 'Edward', 'age' => 25],
    ['name' => 'Kris', 'age' => 18],
    ['name' => 'Cooper', 'age' => 20],
    ['name' => 'Alice', 'age' => 22],
];

$nameOfColon = (array_keys($homies[0]));
?>

<table>
    <tr>
        <th><?= $nameOfColon[0] ?></th>
        <th><?= $nameOfColon[1] ?></th>
    </tr>

    <?php foreach ($homies as $homie): ?>
        <tr>
            <td><?= $homie['name'] ?></td>
            <td><?= $homie['age'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>


<?php
function loger($word)
{
    file_put_contents('logs.txt', date("Y-m-d H:i:s ") . $word . "\n", FILE_APPEND);
}

;

$words = ['Radiant', 'Other', 'Stacks', 'Good', 'Unique'];

foreach ($words as $word) {
    loger($word);
    echo "save to log $word" . '<br>';
    usleep(mt_rand(500000, 2000000));
};
?>
