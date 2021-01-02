<?php

include 'src/config/config.php';

$user = unserialize($_SESSION['user']);
?>

<?php include 'src/views/default.php' ?>

<div class="container landing">
    <h1>Opinion</h1>
    <h2>Bem vindo, <?= html_entity_decode($user->username) ?>!</h2>

    <a href="#" open-vote>votar</a> |
    <a href="#" open-form>criar votação</a> |
    <a href="dashboard.php">minhas votações</a> | 
    <a href="logout.php">sair</a>
    
    <div app>
        <form action="#" method="POST" create>
            <h3>Criar votação</h3>
            <p>Crie sua própria votação.</p>

            <label for="title">Título</label>
            <input type="text" name="title">

            <label for="description">Descrição</label>
            <textarea name="description" id="description"></textarea>

            <div>
                <label for="op1">Candidato #1</label>
                <input id="op1" type="text" name="option[]">

                <label for="op2">Candidato #2</label>
                <input id="op2" type="text" name="option[]">

                <button add>Adicionar opção +</button>
            </div>

        </form>
        
        <div vote>
            <h3>Lorem, ipsum dolor.</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet at ipsam iure quos voluptatibus, molestiae dolor, dolorum a reprehenderit itaque veniam fugit architecto. Soluta et delectus porro veniam vel?
            </p>

            <div>
                <a href="vote.php?id=votacao_id&op=1"><strong>Lorem, ipsum dolor.</strong></a>
                <a href="vote.php?id=votacao_id&op=2"><strong>Lorem, ipsum dolor.</strong></a>
                <a href="vote.php?id=votacao_id&op=3"><strong>Lorem, ipsum dolor.</strong></a>
            </div>

            <a href="">Próxima</a>
        </div>

    </div>

    

</div>

<?php include 'src/views/footer.php' ?>
