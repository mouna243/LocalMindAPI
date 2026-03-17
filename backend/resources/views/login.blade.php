<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-container {
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
    font-size: 28px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: 500;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s;
}

input[type="email"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #667eea;
}

.error {
    color: #e74c3c;
    font-size: 14px;
    margin-top: 5px;
    display: block;
    min-height: 20px;
}

.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    font-size: 14px;
}

.form-options label {
    display: flex;
    align-items: center;
    gap: 5px;
    margin: 0;
    color: #666;
}

.forgot-password {
    color: #667eea;
    text-decoration: none;
    transition: color 0.3s;
}

.forgot-password:hover {
    color: #764ba2;
    text-decoration: underline;
}

.submit-btn {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
}

.submit-btn:active {
    transform: translateY(0);
}

.register-link {
    text-align: center;
    margin-top: 25px;
    color: #666;
    font-size: 14px;
}

.register-link a {
    color: #667eea;
    text-decoration: none;
    font-weight: 500;
}

.register-link a:hover {
    text-decoration: underline;
}
</style>
<body>
    <div class="login-container">
        <h2>Connexion</h2>
        <form id="loginForm" method="POST" action="{{ route('Login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Adresse Email :</label>
                <input type="email" id="email" name="email" required
                       placeholder="exemple@email.com">
                <span class="error" id="emailError"></span>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required
                       placeholder="Votre mot de passe">
                <span class="error" id="passwordError"></span>
            </div>

            <div class="form-options">
                <label>
                    <input type="checkbox" id="remember" name="remember">
                    Se souvenir de moi
                </label>
                <a href="#" class="forgot-password">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="submit-btn">Se connecter</button>

            <p class="register-link">
                Pas encore de compte ? <a href="/singin">S'inscrire</a>
            </p>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
