<?php
include('/xampp/htdocs/CMS-24/day4/config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT name, email, gender, receive_email FROM users Where id = ? ";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt){
        mysqli_stmt_bind_param($stmt, "i", $id);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result); ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <title>Bootstrap Example</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            </head>

            <body>

                <div class="container">
                    <h2>View Record</h2>
                    <hr>
                    <div class="card">
                        <div class="card-body">

                            <p><strong>Name:</strong></p>
                            <p><?php echo $row['name'] ?></p>
                            <p><strong>Email:</strong></p>
                            <p><?php echo $row['email'] ?></p>
                            <p><strong>Gender:</strong></p>
                            <p><?php echo $row['gender'] ?></p>
                            <?php $case = $row['receive_email'] == 'on' ?
                                'You will receive mail from us' :
                                'You will not receive mail from us'; ?>
                            <p><?php echo $case; ?></p>

                <a href="/CMS-24/day4/index.php"><button type="button" class="btn btn-primary">Back</button></a>
                        </div>
                    </div>
                </div>

            </body>

            </html>
            <?php
        } else {
            echo "No results found for the provided ID.";
        }


        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing the query: " . mysqli_error($conn);
    }


    mysqli_close($conn);
}
?>