<div class="nav">
    <a href="#" open-vote>votar</a>
    <a href="#" open-form>criar votação</a>
    <a href="dashboard.php">minhas votações</a>
    <a href="logout.php">sair</a>
</div>

<div class="container landing">
    <h1>Opinion</h1>
    <h2>Bem vindo, <?= html_entity_decode($user->username) ?>!</h2>
    
    <div app>
        <form action="#" method="POST" create>
            <h3>Criar votação</h3>
            <p>Crie sua própria votação.</p>

            <label for="title">Título</label>
            <input type="text" name="title">
            <input type="hidden" name="create_votation">

            <label for="description">Descrição</label>
            <textarea name="description" id="description"></textarea>

            <div>
                <label for="op1">Candidato #1</label>
                <input id="op1" type="text" name="option[]">

                <label for="op2">Candidato #2</label>
                <input id="op2" type="text" name="option[]">

                <button add>Adicionar opção +</button>
            </div>

            <input type="submit" value="Criar votação">

        </form>
        
        <div vote>
            <?php if ($randomPoll->getValues()): ?>
                <h3><?= html_entity_decode($randomPoll->title) ?></h3>
                <p><?= html_entity_decode($randomPoll->description) ?></p>

                <div>
                    <?php foreach ($randomPollOptions as $option): ?>
                        <a href="vote.php?v=<?= $option->id ?>">
                            <strong><?= html_entity_decode($option->name) ?></strong>
                        </a>
                    <?php endforeach ?>
                </div>

                <a href="">Próxima</a>
            <?php else: ?>
                <h3>Nada para votar...</h3>
            <?php endif; ?>
        </div>

    </div>

    

</div>