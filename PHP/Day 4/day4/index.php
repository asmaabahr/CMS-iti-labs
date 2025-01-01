<?php 
include('config.php');
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $receive = isset($_POST['receive']) ? 'on' : 'off';
    

    $sql = "INSERT INTO users(name, Email, gender, receive_email) 
    VALUES ('$name', '$email', '$gender', '$receive')";
    $retval = mysqli_query($conn,$sql);

    if(! $retval ) {
        die('Could not insert to table: ' . mysqli_connect_error($retval));
     }
      
     echo "<br>Data inserted to table successfully\n";
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .icon {
            width: 30px;
            height: 30px;
        }

        .member button {
            float: right;
            margin-top: 30px;
        }

        .member h2 {
            float: left;
        }

        .clearfix{
            clear: both;
        }
    </style>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>



    <div class="container">
        <div class="member">
            <h2>Users Details</h2>
        </div>

        <div class="member">
           <a href="register.php">><button type="button" class="btn btn-success">Add New User</button></a>
        </div>
        <div class="clearfix"></div>
        <hr>
        <?php
        include('config.php');

        $sql = 'SELECT id, name, email, gender, receive_email FROM users';
        $result = mysqli_query($conn,$sql );
        
        if(! $result ) {
            die('Could not get data: ' . mysqli_connect_error($result));
        }


        if (mysqli_num_rows($result) > 0) {?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Mail Status</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
           <?php while($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['receive_email']; ?></td>
                    <td>
                        <a href="/CMS-24/day4/iconsAction/view.php?id=<?php echo $row['id'];?>"><img class="icon" src="./icons/eye (1).png"></a>
                        <img class="icon" src="./icons/edit.png">
                        <img class="icon" src="./icons/trash.png">
                    </td>
                </tr><?php }
                } else {
                     echo "0 results";
                }
                echo "Fetched data successfully\n";
        
                mysqli_close($conn);?>
            </tbody>
        </table>
    </div>

</body>

</html>