<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'track' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'track' => 'CMS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'track' => 'PHP'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'track' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'track' => 'PHP'],
];
// foreach ($students as $student) {
//     foreach ($student  as $key => $value) {
//         echo "$key:$value <br>";
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Aplication name: PHP class registration</h1>

    <table>
        <tr>
            <th> Name </th>
            <th> Email </th>
            <th> Track </th>
        </tr>


        <?php
        foreach ($students as $student) {
            $style = $student['track'] == 'CMS' ? "style='color: red;'" : "";

            echo "<tr $style>";
        ?>
            <td><?php echo $student['name']; ?> </td>
            <td><?php echo $student['email']; ?> </td>
            <td><?php echo $student['track']; ?> </td>
            </tr>
        <?php

        } ?>




    </table>
</body>

</html>