<?php 
$errormsg = [];
$name = $email = $gender = $receive = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['name'])) {
        $errormsg['name'] = 'Name is required';
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['name'])) {
        $errormsg['name'] = 'Name must be letters';
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['email'])) {
        $errormsg['email'] = 'Email is required';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $errormsg['gender'] = 'Choose a gender';
    } else {
        $gender = $_POST['gender'];
    }

    $receive = isset($_POST['receive']) && $_POST['receive'] === 'on' ? true : false;
       
    if (empty($errormsg)) {
        include('config.php');

        $sql = "INSERT INTO users(name, Email, gender, receive_email) 
        VALUES ('$name', '$email', '$gender', '$receive')";
        $retval = mysqli_query($conn,$sql);

        if ($retval){
            header("Location: index.php");
        }  else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>User Registration Form</h2>
        <hr>
        <p>Please fill this form and submit to add user record to Database</p>
        <form method="post">
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="texr" class="form-control" id="name" placeholder="Enter your Name" name="name" value="<?php echo $name; ?>"><?php if (isset($errormsg['name'])){ ?>
                    <span class="text-danger"><?php echo $errormsg['name']; }?></span>
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email" value="<?php echo $email; ?>"> <?php if (isset($errormsg['email'])){ ?>
                    <span class="text-danger"><?php echo $errormsg['email'];} ?></span>
            </div>
            <div class="form-group">
                <label for="gender"> Gender:</label><br>
                <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
                <br>
                <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male <?php if (isset($errormsg['gender'])){ ?>
                    <br><span class="text-danger"><?php echo $errormsg['gender'];} ?></span>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="receive" value="on" <?php if (isset($receive) && $receive==true) echo "checked"; ?>> Receive Emails from us</label>
            </div>
            
            <input type="submit" class="btn btn-primary" name="submit">
            <input type="reset" class="btn btn-secondary">

        </form>
        
    </div>

</body>

</html>