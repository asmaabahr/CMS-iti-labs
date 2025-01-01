<?php
include('/xampp/htdocs/CMS-24/day4/config.php');


if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {

        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {

            header("Location: /CMS-24/day4/index.php");
            exit();
        } else {
            echo "Error in deleting  " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
} else {
    echo "there is no id";
}

mysqli_close($conn);
?>
