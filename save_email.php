<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        file_put_contents("supportemail.txt", $email . PHP_EOL, FILE_APPEND);
        echo "saved";
    } else {
        echo "invalid";
    }
} else {
    echo "invalid";
}
?>
