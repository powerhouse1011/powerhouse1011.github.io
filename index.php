<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .form-container {
            text-align: center;
        }
        input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            cursor: pointer;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="">
            <input type="password" name="password" placeholder="Enter Password" required>
            <br>
            <input type="submit" value="Submit">
        </form>

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
                // Show error message if password is incorrect
                echo "<p class='error'>Incorrect password. Please try again.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
