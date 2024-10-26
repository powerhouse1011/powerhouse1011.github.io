<?php
// Get the password submitted via the form
$password = $_POST['password'];

// Check the password and redirect based on its value
if ($password == '738578') {
    header('Location: http://powerhouse1011.github.io/home');
    exit;
} elseif ($password == 'freesongs') {
    header('Location: https://powerhouse1011.github.io/freesongs');
    exit;
} else {
    header('Location: https://NOPE.github.io');
    exit;
}
?>
