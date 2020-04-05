<?php
// define variables and set to empty values
 $email= $emailErr = $emailSuccess = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $email = "";
        }

        include 'databaseconn.php';

        $sql = "INSERT INTO newsletter (email)
VALUES ( '$email')";

        if (mysqli_query($conn, $sql)) {
            $emailSuccess = "you have successfully signed up for our newsletters";
        } else {
            $emailErr = "you are already registered";
            //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>