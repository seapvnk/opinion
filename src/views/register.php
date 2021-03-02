<div class="container form">

    <h1>Registro</h1>
    <h2>Faça parte da nossa comunidade</h2>

    <?php if ($hasCreatedUser): ?>
        <h3 class="color-success">Conta criada com sucesso!</h3>
    <?php endif;?>

    <form action="#" method="POST">
        <h3>Formulário de cadastro</h3>
        <br>

        <div class="row">
            <div class="col">
                <label for="username">*Nome de usuário</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    placeholder="Seu nome de usuário"
                    value="<?= isset($_POST['username'])? $_POST['username']  : '' ?>"
                >
                <?php if (isset($errors) && isset($errors['username'])): ?>
                    <span class="error-color"><?= $errors['username'] ?></span>
                <?php endif; ?>

                <label for="email">*E-mail</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Seu melhor e-mail"
                    value="<?= isset($_POST['email'])? $_POST['email']  : '' ?>"
                >
                <?php if (isset($errors) && isset($errors['email'])): ?>
                    <span class="error-color"><?= $errors['email'] ?></span>
                <?php endif; ?>
            </div>

            <div class="col">
                <label for="password">*Senha</label>
                <input type="password" id="password" name="password" placeholder="Sua senha">
                
                <?php if (isset($errors) && isset($errors['password'])): ?>
                    <span class="error-color"><?= $errors['password'] ?></span>
                <?php endif; ?>

                <label for="password_confirm">*Confirmar senha</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirme sua senha">
                
                <?php if (isset($errors) && isset($errors['password_confirm'])): ?>
                    <span class="error-color"><?= $errors['password_confirm'] ?></span>
                <?php endif; ?>
            </div>
        </div>
        <button role="submit">Cadastrar</button>
        <br>

        <a href="login.php">Já tenho conta</a>
        <a href="index.php">Voltar</a>
    </form>

</div>