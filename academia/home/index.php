<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE php>
<php lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioEnergy - Gym</title>
    <script src="https://kit.fontawesome.com/1e63123c02.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">

</head>
<body>

    <header class="navbar">
        <div class="logo">BIO<span>ENERGY</span></div>
        <nav>
            <ul>
                <li><a href="/academia/about/index.php">Sobre</a></li>
                <li><a href="/academia/contact/index.php">Contato</a></li>
                <li><a href="/academia/services/index.php">Serviços</a></li>
                <li><a href="../login.php" class="btn-nav">Matricule-se</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>TREINE COM <br><span>OS MELHORES</span></h1>
            <p>A partir de R$ 99,90/mês. Sem burocracia, resultados reais.</p>
            <a href="../login.php" class="btn-main">QUERO COMEÇAR AGORA</a>
        </div>
    </section>

    <section class="estrutura-section">
    <div class="estrutura-container">
        <div class="estrutura-header">
            <h3>A ESTRUTURA</h3>
            <h2>QUE TRANSFORMA SEU TREINO</h2>
        </div>
        
        <div class="estrutura-content-grid">
            <div class="large-images-group">
                <div class="image-card">
                    <img src="https://www.lifefitness.com/Kentico13CoreBase/media/LFMedia/LifeFitnessImages/MediaSync/195-632-ironberg-brand-logo.jpg?h=630&w=1200" alt="Área de cardio com esteiras e elípticos">
                    <div class="image-label">EQUIPAMENTOS DE ALTO PADRÃO</div>
                </div>
                <div class="image-card">
                    <img src="https://www.ironberg.com.br/assets/images/foto-ironberg-santos-4.webp" alt="Mulher fazendo musculação com haltere">
                    <div class="image-label">MUSCULAÇÃO E CARDIO</div>
                </div>
            </div>
            
            <div class="icones-grade">
                <div class="icon-card">
                    <i class="fa-solid fa-boxes-stacked icon-orange"></i>
                    <p>ARMÁRIOS ROTATIVOS</p>
                </div>
                <div class="icon-card">
                    <i class="fa-solid fa-shower icon-orange"></i>
                    <p>DUCHAS AQUECIDAS</p>
                </div>
                <div class="icon-card">
                    <i class="fa-solid fa-fan icon-orange"></i>
                    <p>AR-CONDICIONADO CLIMATIZADORES</p>
                </div>
                <div class="icon-card">
                    <i class="fa-solid fa-car icon-orange"></i>
                    <p>ESTACIONAMENTO</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="plans">
        <h2>NOSSOS PLANOS</h2>
        <div class="plans-container">
            <div class="plan-card">
                <h3>PLANO SMART</h3>
                <p class="price">R$ 99,90<span>/mês</span></p>
                <ul>
                    <li>Acesso à unidade escolhida</li>
                    <li>Área de musculação e cardio</li>
                    <li>Sem taxa de cancelamento*</li>
                </ul>
                <a href="#" class="btn-plan">ASSINAR</a>
            </div>
            <div class="plan-card highlight">
                <div class="badge">MAIS POPULAR</div>
                <h3>PLANO VIP</h3>
                <p class="price">R$ 129,90<span>/mês</span></p>
                <ul>
                    <li>Acesso a TODAS as unidades</li>
                    <li>Leve um amigo 4x no mês</li>
                    <li>Cadeira de massagem inclusa</li>
                </ul>
                <a href="#" class="btn-plan">ASSINAR</a>
            </div>
        </div>
    </section>

</body>
</php>