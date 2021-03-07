<div class="nav">
    <a href="app.php" open-vote>voltar</a>
    <a href="logout.php">sair</a>
</div>


<?php if ($deletedPoll): ?>
<div style="border: 1px solid springgreen; color: springgreen;">
</div>
<?php endif ?>

<div class="container landing">
    <h1>Dashboard</h1>
    <h2>Veja as votações criadas por você</h2>

    <br>
    <?php foreach ($polls as $poll): ?>
        <span>
            <h3>#<?= $poll->id ?> - <?= $poll->title ?></h3>
            
            <img src='<?= $poll->getChart() ?>'>
            <br>
            
            <a style="color: tomato" href="?d=<?= $poll->id ?>">Encerrar votação</a>
            <hr>
        </span>
    <?php endforeach ?>

</div>