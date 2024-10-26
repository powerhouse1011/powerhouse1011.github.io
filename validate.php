<?php
// validate.php
$password = $_POST['password'];

if ($password == '738578') {
    header('Location: http://powerhouse1011.github.io/home');
    exit;
} elseif ($password == 'freesongs') {
    header('Location: http://powerhouse1011.github.io/freesongs');
    exit;
} else {
    header('Location: http://ww.example.com');
    exit;
}
?>
