<!DOCTYPE php>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioEnergy - Login</title>
    <link rel="stylesheet" href="style-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat', sans-serif;
    background-color: #000;
    color: #fff;
    overflow: hidden; /* Evita scroll na tela de login */
}

.login-wrapper {
    display: flex;
    height: 100vh;
    width: 100%;
}

/* Imagem lateral */
.login-side-image {
    flex: 1;
    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7)), 
                url('https://images.unsplash.com/photo-1593079831268-3381b0db4a77?auto=format&fit=crop&q=80&w=1469') no-repeat center center/cover;
    display: block;
}

/* Container do Formulário */
.login-container {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #0a0a0a;
}

.login-box {
    width: 100%;
    max-width: 400px;
    padding: 40px;
}

.brand {
    margin-bottom: 40px;
    text-align: center;
}

.logo {
    font-size: 2rem;
    font-weight: 900;
    text-decoration: none;
    color: #fff;
}

.logo span {
    color: #FF4D00;
}

h2 {
    font-size: 1.8rem;
    font-weight: 900;
    margin-bottom: 10px;
}

p {
    color: #888;
    font-size: 0.9rem;
    margin-bottom: 30px;
}

/* Estilo dos Campos */
.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    font-size: 0.8rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #ccc;
}

.input-group input {
    width: 100%;
    padding: 15px;
    background: #1a1a1a;
    border: 1px solid #333;
    border-radius: 5px;
    color: #fff;
    font-family: 'Montserrat', sans-serif;
    transition: 0.3s;
}

.input-group input:focus {
    outline: none;
    border-color: #FF4D00;
}

/* Opções Extras */
.options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.8rem;
    margin-bottom: 30px;
}

.options a {
    color: #FF4D00;
    text-decoration: none;
}

/* Botão de Login */
.btn-login {
    width: 100%;
    padding: 15px;
    background: #FF4D00;
    border: none;
    border-radius: 5px;
    color: #000;
    font-weight: 900;
    font-size: 1rem;
    cursor: pointer;
    transition: transform 0.2s, background 0.3s;
}

.btn-login:hover {
    background: #e68a00;
    transform: translateY(-2px);
}

/* Footer do Login */
.footer-login {
    margin-top: 30px;
    text-align: center;
    font-size: 0.9rem;
}

.footer-login span {
    color: #888;
}

.footer-login a {
    color: #FF4D00;
    text-decoration: none;
    font-weight: 700;
    margin-left: 5px;
}

/* Responsividade */
@media (max-width: 800px) {
    .login-side-image {
        display: none; /* Esconde a imagem em telas pequenas */
    }
}
    </style>

<body>

    <div class="login-wrapper">
        <div class="login-side-image"></div>

        <div class="login-container">
            <div class="login-box">
                <div class="brand">
                    <a href="index.html" class="logo">BIO<span>ENERGY</span></a>
                </div>
                
                <h2>BEM-VINDO DE VOLTA</h2>
                <p>Insira seus dados para acessar sua área de treino.</p>

                <form>
                    <div class="input-group">
                        <label for="email">E-mail ou CPF</label>
                        <input type="text" id="email" placeholder="Digite seu acesso" required>
                    </div>

                    <div class="input-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" placeholder="••••••••" required>
                    </div>

                    <div class="options">
                        <label><input type="checkbox"> Lembrar de mim</label>
                        <a href="#">Esqueceu a senha?</a>
                    </div>

                    <button type="submit" class="btn-login">ENTRAR NA ÁREA DO ALUNO</button>
                </form>

                <div class="footer-login">
                    <span>Ainda não é membro?</span>
                    <a href="matricule.php">Matricule-se agora</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>