<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
#Task 1
// echo phpinfo();

#Task 2 const holds website name
define("WEBSITE_NAME","Amazon");
echo "<h1>". WEBSITE_NAME ."</h1>";
echo '<br>';

#Task 3
echo "Server Name: ";
print_r($_SERVER['SERVER_NAME']);
echo '<br>';

echo "Server Address: ";
print_r($_SERVER['SERVER_ADDR']);
echo '<br>';

echo "Server Port: ";
print_r($_SERVER['SERVER_PORT']);
echo '<br>';

echo "Script Name: ";
print_r($_SERVER['SCRIPT_NAME']);
echo '<br>';

echo "Script Path: ";
print_r($_SERVER['SCRIPT_FILENAME']);
echo '<br>';
echo '<br>';

#Task 4 (switch case)
$age = 10;

switch($age){
    case $age < 5:
        echo "Stay at home";
        break;
    case $age == 5:
        echo "Go to kindergarden";
        break;
    case $age > 6 && $age < 12:
        echo "Go to grade : XXX";
        break;
    default:
        echo "Un acceptable age";
}





?>
</body>
</html>