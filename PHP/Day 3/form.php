<?php

$errormsg = [];
$name = $email = $group = $classD = $gender = "";
$selectedCourses = [];
$agree = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_REQUEST['name'])) {
        $errormsg['name'] = 'Name is required';
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_REQUEST['name'])) {
        $errormsg['name'] = 'Name must be letters';
    } else {
        $name = $_REQUEST['name'];
    }

    if (empty($_REQUEST['email'])) {
        $errormsg['email'] = 'Email is required';
    } else {
        $email = $_REQUEST['email'];
    }

    $group = $_REQUEST['group'];
    $classD = $_REQUEST['classD'];

    if (empty($_REQUEST['gender'])) {
        $errormsg['gender'] = 'Choose a gender';
    } else {
        $gender = $_REQUEST['gender'];
    }

    $selectedCourses = $_REQUEST['course'] ?? [];

    if (empty($_REQUEST['agree'])) {
        $errormsg['agree'] = 'You must agree to continue';
    } else {
        $agree = true;
    }
    if (empty($errormsg)) {

        echo "<h1>Your given data are as:</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Group#: $group</p>";
        echo "<p>Class details: $classD</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Your courses are: ";
        foreach ($selectedCourses as $course) {
            echo $course;
        }
        echo "</p> <br>";
    }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            margin-left: 50px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Aplication name: AAST_BIS class registration</h1>

    <form method="post" action="<?php $_PHP_SELF; ?>">
        <p><span class="error">* required field</span></p>

        <label for="name"> Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>"><span class="error">* <?php echo $errormsg['name'];?></span>
        <br><br>

        <label for="email"> E-mail:</label>
        <input type="text" name="email" value="<?php echo $email; ?>"><span class="error">* <?php echo $errormsg['email'];?></span>
        <br><br>

        <label for="group"> Group:</label>
        <input type="text" name="group" value="<?php echo $group; ?>">
        <br><br>

        <label for="classD"> Class details:</label>
        <textarea name="classD" rows="5" cols="40"><?php echo $classD; ?></textarea>
        <br><br>

        <label for="gender"> Gender:</label>
        <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
        <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male <span class="error">* <?php echo $errormsg['gender'];?></span>
        <br><br>

        <label for="course">Select course:</label>
        <select name="course[]" id="course" multiple>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="MySQL">MySQL</option>
            <option value="HTML">HTML</option>
        </select>
        <br><br>

        <label for="agree"> Agree</label>
        <input type="checkbox" name="agree" <?php if (isset($agree) && $agree==true) echo "checked"; ?>><span class="error">* <?php echo $errormsg['agree'];?></span>
        <br><br>



        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>