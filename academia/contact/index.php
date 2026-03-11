<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | BioEnergy Academ</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="hero">
        <a href="../home/index.php" class="back"><i class="fa-solid fa-arrow-left"></i></a>
        <div class="hero-content">
            <h1>Fale Conosco</h1>
            <p>Tire suas dúvidas e venha treinar na BioEnergy</p>
        </div>
    </header>

    <main class="container">
        <section class="contact-card">
            <h2>Envie sua Mensagem</h2>
            <form action="#">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" placeholder="Ex: João Silva" required>
                </div>
                
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="seu@email.com" required>
                </div>

                <div class="form-group">
                    <label for="unidade">Unidade Próxima</label>
                    <select id="unidade">
                        <option value="">Selecione uma unidade...</option>
                        <option value="centro">Unidade Centro</option>
                        <option value="paulista">Unidade Paulista</option>
                        <option value="bh">Unidade Belo Horizonte</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="mensagem">Como podemos ajudar?</label>
                    <textarea id="mensagem" rows="5" placeholder="Escreva aqui..."></textarea>
                </div>

                <button type="submit" class="btn-enviar">Enviar Agora</button>
            </form>
        </section>

        <aside class="info-sidebar">
            <br><br><br><br>
            <div class="info-box">
                <i class="fab fa-whatsapp"></i>
                <div>
                    <h3>WhatsApp</h3>
                    <p>(11) 98765-4321</p>
                </div>
            </div>

            <div class="info-box">
                <i class="fas fa-envelope"></i>
                <div>
                    <h3>E-mail Oficial</h3>
                    <p>atendimento@bioenergy.com.br</p>
                </div>
            </div>

            <div class="social-area">
                <h3>Siga o nosso treino</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </aside>
    </main>

</body>
</html>