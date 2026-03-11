<style>
    /* Reset básico para garantir que não haja margens indesejadas */
    body, html {
        margin: 0;
        padding: 0;
    }

    :root {
        --cor-primaria: #ff4500; 
        --cor-secundaria: #1a1a1a;
        --cor-fundo: #f4f4f4;
        --branco: #ffffff;
    }

    /* Ajuste para ocupar a tela toda */
    .academia-servicos {
        font-family: 'Segoe UI', Roboto, sans-serif;
        background: linear-gradient(to bottom,rgba(0, 0, 0, 0) 50%, #ff6201b6);
        background-position: 0 0, 100% 0;
        padding: 80px 0; /* Aumentei o respiro em cima e embaixo */
        width: 100%;
        height: 100%;    /* Garante largura total */
        display: block;
    }

    .container-servicos {
        max-width: 1200px; /* Largura máxima do conteúdo central */
        margin: 0 auto;    /* Centraliza o bloco */
        padding: 0 20px;   /* Evita que encoste na borda em celulares */
    }

    .titulo-secao {
        font-size: 2.5rem;
        color: var(--cor-secundaria);
        text-align: center;
        margin-bottom: 50px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Grid que organiza os cards */
    .grid-servicos {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .card-servico {
        background: var(--branco);
        padding: 40px 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: 0.3s ease;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card-servico:hover {
        transform: translateY(-10px);
    }

    /* Estilo para o card de destaque (Crossfit) */
    .card-servico.destaque {
        background: var(--cor-secundaria);
        color: white;
        transform: scale(1.05); /* Deixa ele levemente maior */
    }

    .icone-servico {
        font-size: 50px;
        margin-bottom: 20px;
    }

    .card-servico h3 {
        margin-bottom: 15px;
        font-size: 1.6rem;
    }

    .card-servico p {
        line-height: 1.6;
        margin-bottom: 25px;
        min-height: 50px; /* Mantém os botões alinhados */
    }

    .btn-saber-mais {
        background-color: var(--cor-primaria);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        font-size: 1rem;
        transition: background 0.3s;
        width: 80%; /* Botão mais largo e elegante */
    }

    .btn-saber-mais:hover {
        filter: brightness(1.2);
    }

    /* ESTILO DOS MODAIS (JANELAS) */
    .modal-overlay {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.85);
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background: white;
        color: #333;
        padding: 40px;
        border-radius: 20px;
        max-width: 500px;
        width: 90%;
        position: relative;
        box-shadow: 0 5px 30px rgba(0,0,0,0.3);
    }

    .fechar {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 35px;
        cursor: pointer;
        color: #999;
    }

    .back{
        font-size: 30px;
        color: #FF4D00;
        margin: 15px;
    }

    .fechar:hover { color: var(--cor-primaria); }

</style>

<script src="https://kit.fontawesome.com/1e63123c02.js" crossorigin="anonymous"></script>

<!-- From Uiverse.io by Jedi-hongbin --> 
 <br>
<a href="../home/index.php" class="back"><i class="fa-solid fa-arrow-left"></i></a>

<section class="academia-servicos">
    <div class="container-servicos">
        <h2 class="titulo-secao">Nossos Serviços</h2>
        
        <div class="grid-servicos">
            <div class="card-servico">
                <div class="icone-servico">💪</div>
                <h3>Musculação</h3>
                <p>Equipamentos de última geração para hipertrofia e condicionamento físico.</p>
                <button class="btn-saber-mais" onclick="abrirModal('modal-musculacao')">Saiba Mais</button>
            </div>

            <div class="card-servico destaque">
                <div class="icone-servico">🔥</div>
                <h3>Crossfit</h3>
                <p>Desafie seus limites com treinos dinâmicos e alta queima calórica.</p>
                <button class="btn-saber-mais" onclick="abrirModal('modal-crossfit')">Saiba Mais</button>
            </div>

            <div class="card-servico">
                <div class="icone-servico">🧘</div>
                <h3>Yoga</h3>
                <p>Encontre o equilíbrio perfeito entre flexibilidade e paz mental.</p>
                <button class="btn-saber-mais" onclick="abrirModal('modal-yoga')">Saiba Mais</button>
            </div>
        </div>
    </div>

    <div id="modal-musculacao" class="modal-overlay">
        <div class="modal-content">
            <span class="fechar" onclick="fecharModal('modal-musculacao')">&times;</span>
            <h2>Musculação Profissional</h2>
            <hr>
            <p>Nossa área de musculação oferece:</p>
            <ul>
                <li>Instrutores qualificados em tempo integral.</li>
                <br>
                <li>Treinos personalizados via aplicativo.</li>
                <br>
                <li>Equipamentos ergonômicos.</li>
                <br>
                <li>Avaliações periódicas para medir seus ganhos e ajustar seus objetivos.</li>
                <br>
                <li>Ambiente amplo, climatizado e com infraestrutura completa de vestiários.</li>
            </ul>
        </div>
    </div>

    <div id="modal-crossfit" class="modal-overlay">
        <div class="modal-content">
            <span class="fechar" onclick="fecharModal('modal-crossfit')">&times;</span>
            <h2>Crossfit & Performance</h2>
            <hr>
            <p>Prepare-se para uma experiência intensa:</p>
            <ul>
                <li>Aulas em grupo com coach certificado.</li>
                <br>
                <li>Equipamentos oficiais (Kettlebells, Ropes, Boxes).</li>
                <br>
                <li>Comunidade focada em superação.</li>
                <br>
                <li>Equipamentos oficiais e espaço amplo para você performar como um verdadeiro atleta.</li>
                <br>
                <li>Treinos adaptáveis para quem está começando hoje ou para quem já busca alta performance.</li>
            </ul>
        </div>
    </div>

    <div id="modal-yoga" class="modal-overlay">
        <div class="modal-content">
            <span class="fechar" onclick="fecharModal('modal-yoga')">&times;</span>
            <h2>Yoga & Bem-estar</h2>
            <hr>
            <p>Conecte-se com você mesmo:</p>
            <ul>
                <li>Ambiente climatizado e silencioso.</li>
                <br>
                <li>Técnicas de respiração e meditação.</li>
                <br>
                <li>Melhora imediata na postura e flexibilidade.</li>
                <br>
                <li>Redução comprovada dos níveis de estresse, melhora na qualidade do sono e maior foco no cotidiano.</li>
                <br>
                <li>Não é preciso ser flexível para começar; nossas aulas respeitam o limite e o tempo de cada aluno.</li>
            </ul>
        </div>
    </div>
</section>

<script>
    function abrirModal(id) {
        document.getElementById(id).style.display = 'flex';
        // Impede o scroll do fundo ao abrir o modal
        document.body.style.overflow = 'hidden';
    }
    
    function fecharModal(id) {
        document.getElementById(id).style.display = 'none';
        // Devolve o scroll ao fechar
        document.body.style.overflow = 'auto';
    }

    // Fecha se clicar fora da caixa branca
    window.addEventListener('click', function(event) {
        if (event.target.classList.contains('modal-overlay')) {
            event.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
</script>