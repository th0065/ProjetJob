<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    $errors = [];

    if (empty($name)) {
        $errors[] = "Le nom est requis.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'adresse email est invalide.";
    }
    if (empty($subject)) {
        $errors[] = "Le sujet est requis.";
    }
    if (empty($message)) {
        $errors[] = "Le message est requis.";
    }

    if (empty($errors)) {
        
        echo "Merci pour votre message, nous vous répondrons sous peu.";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}


?>
