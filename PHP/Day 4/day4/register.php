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
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="texr" class="form-control" id="name" placeholder="Enter your Name" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
            </div>
            <div class="form-group">
                <label for="gender"> Gender:</label><br>
                <input type="radio" name="gender" value="female">Female
                <br>
                <input type="radio" name="gender" value="male" >Male 
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="receive" value="on"> Receive Emails from us</label>
            </div>
            <input type="submit" class="btn btn-primary" name="submit">
            <input type="reset" class="btn btn-secondary">
        </form>
    </div>

</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <input type="submit" class="btn btn-primary">
        <input type="reset" class="btn btn-secondary">
    </form>
</body>

</html> -->