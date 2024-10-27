<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define passwords and their respective URLs
    $passwords = [
        "738578" => "https://powerhouse1011.github.io/home",
        "freesongs" => "https://powerhouse1011.github.io/freesongs",
        "PASSRAZZXONK" => "https://powerhouse1011.github.io/Password_PASSRAZZXONK",
        "8680KNOXGAAT" => "https://powerhouse1011.github.io/gaminggam",
        "2500XONKIKMU" => "https://powerhouse1011.github.io/songss"
    ];

    $inputPassword = $_POST['password'];

    // Check if password matches any of the predefined ones
    if (array_key_exists($inputPassword, $passwords)) {
        // Redirect to the associated URL
        header("Location: " . $passwords[$inputPassword]);
        exit();
    } else {
        $errorMessage = "Incorrect password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Result</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <?php
        // Display an error message if the password is incorrect
        if (isset($errorMessage)) {
            echo "<p class='error'>$errorMessage</p>";
            echo '<p><a href="login.html">Go back to Login</a></p>';
        }
        ?>
    </div>
</body>
</html>
