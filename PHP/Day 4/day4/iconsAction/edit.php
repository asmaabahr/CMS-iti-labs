<?php
include('/xampp/htdocs/CMS-24/day4/config.php');

$id = $name = $email = $gender = $receive = "";


if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT name, email, gender, receive_email FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $email, $gender, $receive);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $receive = isset($_POST['receive']) && $_POST['receive'] === 'on' ? 'on' : 'off';

    $sql = "UPDATE users SET name=?, email=?, gender=?, receive_email=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssi", $name, $email, $gender, $receive, $id);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: /CMS-24/day4/index.php");
            exit();
        } else {
            echo "Error in updating " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Edit User Record</h2>
        <hr>
        <p>Please fill this form to update the user record in the database.</p>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name" 
                       value="<?php echo isset($name) ? $name : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email" 
                       value="<?php echo isset($email) ? $email : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label><br>
                <input type="radio" name="gender" value="female" 
                       <?php echo (isset($gender) && $gender == "female") ? "checked" : ''; ?>> Female<br>
                <input type="radio" name="gender" value="male" 
                       <?php echo (isset($gender) && $gender == "male") ? "checked" : ''; ?>> Male
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="receive" value="on" 
                              <?php echo (isset($receive) && $receive == 'on') ? "checked" : ''; ?>> Receive Emails from us</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>

</body>

</html>
