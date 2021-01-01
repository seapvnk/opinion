<?php

include 'src/config/config.php';

$user = unserialize($_SESSION['user']);
?>

<?php include 'src/views/default.php' ?>

<div class="container landing">
    <h1>Opinion</h1>
    <h2>Bem vindo, <?= html_entity_decode($user->username) ?>!</h2>

    <a href="logout.php">Sair</a> |
    <a href="logout.php">Criar votação</a> |


    <div app>
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

<?php include 'src/views/footer.php' ?>
