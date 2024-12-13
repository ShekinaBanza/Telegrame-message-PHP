<?php
// API Token du bot Telegram
$botToken = "7577567595:AAHeFOcoNEfEJmT4JhxaHwpNI5sdngwTYgc";

// Chat ID 
$chatId = 1466850186;

// Vérification de l'envoi du message
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    // Récupération du message
    $message = htmlspecialchars($_POST['message']);

    // URL pour envoyer le message
    $sendMessageUrl = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    // Utilisation de cURL pour envoyer le message
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $sendMessageUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    // Vérification de la réponse
    $responseData = json_decode($response, true);
    if ($responseData['ok']) {
        header('Location: index.php?status=success');
    } else {
        header('Location: index.php?status=error');
    }
} else {
    echo "<p>Aucun message envoyé.</p>";
}
?>
