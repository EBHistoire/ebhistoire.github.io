<?php
session_start();

// Liste des codes autorisés
$codes_autorises = ["EB001", "EB002", "EB003", "EB004"];

// Code envoyé depuis le formulaire
$code = $_POST['code'] ?? '';

if (in_array($code, $codes_autorises)) {
    $_SESSION['code_acces'] = $code;
    header("Location: formations_secrets.php");
    exit;
} else {
    header("Location: acces.html?erreur=1");
    exit;
}
?>
