<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte - Administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Créez un compte gestionnaire</h1>
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Entrez le nom d'utilisateur" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez le mot de passe" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmez le mot de passe</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Confirmez le mot de passe" required>
            </div>
            <button type="submit" name="valid" class="btn btn-primary">Créer le compte</button>
            <a href="dashboard_admin.php" class="btn btn-secondary">Revenir en arrière</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
