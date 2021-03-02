<div class="container form">

    <h1>Login</h1>
    <h2>Faça parte da nossa comunidade</h2>

    <?php if ($hasCreatedUser): ?>
        <h3 class="color-success">Conta criada com sucesso!</h3>
    <?php endif;?>

    <form action="#" method="POST">

        <label for="email">*E-mail</label>
        <input 
            type="email" 
            id="email" 
            name="email" 
            value="<?= isset($_POST['email'])? $_POST['email']  : '' ?>"
        >
        <?php if (isset($errors) && isset($errors['email'])): ?>
            <span class="error-color"><?= $errors['email'] ?></span>
        <?php endif; ?>

        <label for="password">*Senha</label>
        <input type="password" id="password" name="password" placeholder="Sua senha">
        
        <?php if (isset($errors) && isset($errors['password'])): ?>
            <span class="error-color"><?= $errors['password'] ?></span>
        <?php endif; ?>
        <br>

        <button role="submit">Login</button>
        <br>


        <a href="register.php">Não possuo conta</a>
        <a href="index.php">Voltar</a>
    </form>

</div>