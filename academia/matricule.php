<!DOCTYPE php>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioEnergy - Matrícula Online</title>
    <link rel="stylesheet" href="style-matricula.css">
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
    background-color: #050505;
    color: #fff;
    line-height: 1.6;
}

/* Header de Checkout */
.checkout-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 5%;
    background: #111;
    border-bottom: 2px solid #ff9900;
}

.logo {
    text-decoration: none;
    color: #fff;
    font-weight: 900;
    font-size: 1.5rem;
}

.logo span { color: #ff9900; }

.steps {
    display: flex;
    gap: 20px;
}

.step {
    font-size: 0.8rem;
    color: #555;
    font-weight: 700;
    text-transform: uppercase;
}

.step.active { color: #ff9900; }

/* Layout Principal */
.checkout-container {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 40px;
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 5%;
}

/* Formulário */
.form-section h2 { font-weight: 900; font-size: 2rem; }
.form-section p { color: #888; margin-bottom: 30px; }

.form-row {
    display: flex;
    gap: 20px;
}

.form-group {
    flex: 1;
    margin-bottom: 20px;
}

.form-group.full { width: 100%; }

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-size: 0.85rem;
    font-weight: 700;
}

.form-group input {
    width: 100%;
    padding: 12px;
    background: #1a1a1a;
    border: 1px solid #333;
    border-radius: 5px;
    color: #fff;
    font-family: inherit;
}

.form-group input:focus {
    border-color: #ff9900;
    outline: none;
}

.terms { margin: 20px 0; font-size: 0.85rem; color: #ccc; }
.terms a { color: #ff9900; text-decoration: none; }

.btn-checkout {
    width: 100%;
    padding: 18px;
    background: #ff9900;
    border: none;
    border-radius: 5px;
    color: #000;
    font-weight: 900;
    cursor: pointer;
    font-size: 1rem;
    transition: 0.3s;
}

.btn-checkout:hover { background: #fff; }

/* Card de Resumo */
.summary-card {
    background: #111;
    padding: 30px;
    border-radius: 10px;
    position: sticky;
    top: 100px;
}

.summary-card h3 { font-size: 1.1rem; margin-bottom: 20px; border-bottom: 1px solid #333; padding-bottom: 10px; }

.plan-details { display: flex; justify-content: space-between; margin-bottom: 20px; }
.plan-name { font-weight: 900; color: #ff9900; }

.plan-features { list-style: none; margin-bottom: 30px; }
.plan-features li { font-size: 0.85rem; color: #ccc; margin-bottom: 10px; }
.plan-features i { color: #ff9900; margin-right: 10px; }

.total-box { background: #1a1a1a; padding: 20px; border-radius: 5px; }
.total-row { display: flex; justify-content: space-between; font-size: 0.9rem; margin: 5px 0; }
.total-row.main { font-weight: 900; font-size: 1.2rem; color: #fff; margin-top: 10px; }
.free { color: #00ff00; font-weight: 700; }

.change-plan {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #888;
    text-decoration: none;
    font-size: 0.8rem;
}

/* Responsivo */
@media (max-width: 900px) {
    .checkout-container { grid-template-columns: 1fr; }
    .summary-section { order: -1; } /* Mostra o plano primeiro no celular */
}
    </style>

<body>

    <header class="checkout-header">
        <a href="index.html" class="logo">BIO<span>ENERGY</span></a>
        <div class="steps">
            <span class="step active">1. Identificação</span>
            <span class="step">2. Pagamento</span>
            <span class="step">3. Confirmação</span>
        </div>
    </header>

    <main class="checkout-container">
        <section class="form-section">
            <h2>FINALIZAR MATRÍCULA</h2>
            <p>Preencha seus dados para criar sua conta.</p>

            <form>
                <div class="form-group full">
                    <label>Nome Completo</label>
                    <input type="text" placeholder="Ex: João Silva" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" placeholder="000.000.000-00" required>
                    </div>
                    <div class="form-group">
                        <label>Celular</label>
                        <input type="tel" placeholder="(11) 99999-9999" required>
                    </div>
                </div>

                <div class="form-group full">
                    <label>E-mail</label>
                    <input type="email" placeholder="seu@email.com" required>
                </div>

                <div class="form-group full">
                    <label>Senha de Acesso</label>
                    <input type="password" placeholder="Crie uma senha forte" required>
                </div>

                <div class="terms">
                    <label>
                        <input type="checkbox" required> 
                        Li e aceito os <a href="#">termos de uso</a> e o <a href="#">contrato de adesão</a>.
                    </label>
                </div>

            <a href="login.php"><button type="submit" class="btn-checkout">IR PARA O PAGAMENTO <i class="fa-solid fa-arrow-right"></i></button></a>
            </form>
        </section>

        <aside class="summary-section">
            <div class="summary-card">
                <h3>PLANO SELECIONADO</h3>
                <div class="plan-details">
                    <span class="plan-name">PLANO VIP</span>
                    <span class="plan-price">R$ 129,90/mês</span>
                </div>
                <ul class="plan-features">
                    <li><i class="fa-solid fa-check"></i> Acesso total às unidades</li>
                    <li><i class="fa-solid fa-check"></i> Área de musculação e cardio</li>
                    <li><i class="fa-solid fa-check"></i> Cadeira de massagem</li>
                    <li><i class="fa-solid fa-check"></i> Sem fidelidade</li>
                </ul>
                <div class="total-box">
                    <div class="total-row">
                        <span>Taxa de Matrícula</span>
                        <span class="free">GRÁTIS</span>
                    </div>
                    <hr>
                    <div class="total-row main">
                        <span>Total hoje</span>
                        <span>R$ 129,90</span>
                    </div>
                </div>
                <a href="index.html#planos" class="change-plan">Trocar plano</a>
            </div>
        </aside>
    </main>

</body>
</html>