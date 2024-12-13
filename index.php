<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer un message à Telegram</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h1 class="card-title text-center text-primary mb-4">Envoyer un message</h1>

        <!-- Messages de confirmation ou d'erreur -->
        <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
            <div class="alert alert-success text-center" role="alert">
                Message envoyé avec succès !
            </div>
        <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
            <div class="alert alert-danger text-center" role="alert">
                Erreur lors de l'envoi du message.
            </div>
        <?php endif; ?>

        <!-- Formulaire d'envoi -->
        <form action="sendMessage.php" method="POST">
            <div class="mb-3">
                <label for="message" class="form-label">Message :</label>
                <input type="text" name="message" id="message" class="form-control" placeholder="Tapez votre message ici..." required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Envoyer</button>
        </form>

        <!-- Bouton de retour -->
        <!-- <a href="index.php" class="btn btn-secondary w-100">Retour à l'accueil</a> -->
    </div>

    <!-- Lien vers Bootstrap JS (optionnel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
