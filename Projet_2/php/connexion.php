<?php
session_start(); 
$utilisateurs = [
    "test@gmail.com" => "mdp123"
];


$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($utilisateurs[$email]) && $utilisateurs[$email] === $password) {
    
    $_SESSION['email'] = $email; 

    header("Location: tableau_de_bord.php"); 
    exit();
} else {
   
    echo "<p style='color:red; text-align: center;'>Email ou mot de passe incorrect.</p>";
}
?>
